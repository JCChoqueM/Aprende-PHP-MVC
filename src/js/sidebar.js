// sidebar.js

document.addEventListener('DOMContentLoaded', function () {
    initSidebar();
    restoreTemaStates();
    restoreIndexCollapseState();
    initSidebarEvents();
});

/* ================= INICIALIZACIÓN ================= */

function initSidebar() {
    updateStats();
    updateCacheTime();
    initSearch();
}

/* ================= HEADER ================= */

function updateStats() {
    const statsElement = document.getElementById('statsText');
    if (statsElement && typeof sidebarData !== 'undefined') {
        statsElement.textContent =
            `${sidebarData.totalTemas} temas • ${sidebarData.totalEjercicios} ejercicios`;
    }
}

function updateCacheTime() {
    if (typeof sidebarData === 'undefined' || sidebarData.cacheAge === undefined) return;

    const cacheAge = sidebarData.cacheAge;
    const minutes = Math.floor(cacheAge / 60);
    const hours = Math.floor(minutes / 60);

    let timeText = 'recién actualizado';
    if (hours > 0) {
        timeText = `${hours}h ${minutes % 60}m`;
    } else if (minutes > 0) {
        timeText = `${minutes}m`;
    }

    const cacheTimeElement = document.getElementById('cacheTime');
    if (cacheTimeElement) {
        cacheTimeElement.textContent = `Caché: ${timeText}`;
    }
}

/* ================= TEMAS ================= */

function toggleTema(element) {
    const ejercicios = element.nextElementSibling;
    const tema = element.closest('.tema');

    element.classList.toggle('collapsed');
    ejercicios?.classList.toggle('collapsed');

    if (tema) {
        const temaId = tema.dataset.tema;
        const isCollapsed = element.classList.contains('collapsed');
        localStorage.setItem(`tema-${temaId}`, isCollapsed);
    }
}

function restoreTemaStates() {
    const temas = document.querySelectorAll('.tema');

    temas.forEach(tema => {
        const temaId = tema.dataset.tema;
        const isCollapsed = localStorage.getItem(`tema-${temaId}`) === 'true';

        const titulo = tema.querySelector('.tema-titulo');
        const ejercicios = tema.querySelector('.ejercicios');

        if (titulo && ejercicios) {
            if (isCollapsed) {
                titulo.classList.add('collapsed');
                ejercicios.classList.add('collapsed');
            } else {
                titulo.classList.remove('collapsed');
                ejercicios.classList.remove('collapsed');
            }
        }
    });

    // Asegurar que el tema activo esté abierto
    const activeLink = document.querySelector('.ejercicio-link.active');
    if (activeLink) {
        const tema = activeLink.closest('.tema');
        const titulo = tema?.querySelector('.tema-titulo');
        const ejercicios = tema?.querySelector('.ejercicios');

        titulo?.classList.remove('collapsed');
        ejercicios?.classList.remove('collapsed');
    }
}

/* ================= BÚSQUEDA ================= */

function initSearch() {
    const searchBox = document.getElementById('searchBox');
    if (!searchBox) return;

    searchBox.addEventListener('input', function (e) {
        filterExercises(e.target.value.toLowerCase().trim());
    });
}

function filterExercises(searchTerm) {
    const temas = document.querySelectorAll('.tema');

    temas.forEach(tema => {
        const titulo = tema.querySelector('.tema-titulo');
        const ejercicios = tema.querySelector('.ejercicios');
        const links = ejercicios.querySelectorAll('.ejercicio-link');

        if (searchTerm === '') {
            links.forEach(link => link.classList.remove('hidden'));
            tema.style.display = 'block';
            restoreTemaStates();
            return;
        }

        titulo.classList.remove('collapsed');
        ejercicios.classList.remove('collapsed');

        let hasVisible = false;

        links.forEach(link => {
            const text = link.dataset.search || link.textContent.toLowerCase();
            const match = text.includes(searchTerm);

            link.classList.toggle('hidden', !match);
            if (match) hasVisible = true;
        });

        tema.style.display = hasVisible ? 'block' : 'none';
    });
}

/* ================= CACHE ================= */

function refreshCache() {
    const baseUrl = window.location.href.split('?')[0];
    window.location.href = `${baseUrl}?refresh_cache=1`;
}

/* ================= SIDEBAR RESPONSIVE ================= */

function toggleSidebar() {
    document.getElementById('sidebar')?.classList.toggle('active');
    document.getElementById('sidebarOverlay')?.classList.toggle('active');
}

function closeSidebar() {
    document.getElementById('sidebar')?.classList.remove('active');
    document.getElementById('sidebarOverlay')?.classList.remove('active');
}

/* ================= COLAPSAR ÍNDICE ================= */

function toggleIndexCollapse() {
    const sidebar = document.getElementById('sidebar');
    if (!sidebar) return;

    sidebar.classList.toggle('collapsed');
    localStorage.setItem(
        'indexCollapsed',
        sidebar.classList.contains('collapsed')
    );
}

function restoreIndexCollapseState() {
    const sidebar = document.getElementById('sidebar');
    if (localStorage.getItem('indexCollapsed') === 'true') {
        sidebar?.classList.add('collapsed');
    }
}

/* ================= EVENTOS ================= */

function initSidebarEvents() {
    document.addEventListener('keydown', e => {
        if (e.key === 'Escape') closeSidebar();
    });
}
