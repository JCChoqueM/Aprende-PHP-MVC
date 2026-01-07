// sidebar.js

// Inicializar cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', function() {
    initSidebar();
});

function initSidebar() {
    // Actualizar estadísticas
    updateStats();
    
    // Actualizar información del caché
    updateCacheTime();
    
    // Inicializar búsqueda
    initSearch();
}

// Actualizar estadísticas en el header
function updateStats() {
    const statsElement = document.getElementById('statsText');
    if (statsElement && typeof sidebarData !== 'undefined') {
        statsElement.textContent = `${sidebarData.totalTemas} temas • ${sidebarData.totalEjercicios} ejercicios`;
    }
}

// Mostrar edad del caché
function updateCacheTime() {
    if (typeof sidebarData === 'undefined') return;
    
    const cacheAge = sidebarData.cacheAge;
    const minutes = Math.floor(cacheAge / 60);
    const hours = Math.floor(minutes / 60);
    let timeText = '';
    
    if (hours > 0) {
        timeText = `${hours}h ${minutes % 60}m`;
    } else if (minutes > 0) {
        timeText = `${minutes}m`;
    } else {
        timeText = 'recién actualizado';
    }
    
    const cacheTimeElement = document.getElementById('cacheTime');
    if (cacheTimeElement) {
        cacheTimeElement.textContent = `Caché: ${timeText}`;
    }
}

// Toggle tema (expandir/colapsar)
function toggleTema(element) {
    element.classList.toggle('collapsed');
    const ejercicios = element.nextElementSibling;
    if (ejercicios) {
        ejercicios.classList.toggle('collapsed');
    }
}

// Inicializar búsqueda en tiempo real
function initSearch() {
    const searchBox = document.getElementById('searchBox');
    if (!searchBox) return;
    
    searchBox.addEventListener('input', function(e) {
        const searchTerm = e.target.value.toLowerCase().trim();
        filterExercises(searchTerm);
    });
}

// Filtrar ejercicios según término de búsqueda
function filterExercises(searchTerm) {
    const temas = document.querySelectorAll('.tema');
    
    temas.forEach(tema => {
        const tituloElement = tema.querySelector('.tema-titulo');
        const ejerciciosContainer = tema.querySelector('.ejercicios');
        const links = ejerciciosContainer.querySelectorAll('.ejercicio-link');
        
        if (searchTerm === '') {
            // Restaurar estado original
            links.forEach(link => link.classList.remove('hidden'));
            tema.style.display = 'block';
        } else {
            // Expandir tema para búsqueda
            tituloElement.classList.remove('collapsed');
            ejerciciosContainer.classList.remove('collapsed');
            
            let hasVisible = false;
            links.forEach(link => {
                const text = link.dataset.search || link.textContent.toLowerCase();
                if (text.includes(searchTerm)) {
                    link.classList.remove('hidden');
                    hasVisible = true;
                } else {
                    link.classList.add('hidden');
                }
            });
            
            // Ocultar tema si no tiene ejercicios visibles
            tema.style.display = hasVisible ? 'block' : 'none';
        }
    });
}

// Refrescar caché
function refreshCache() {
    const currentUrl = window.location.href.split('?')[0];
    window.location.href = currentUrl + '?refresh_cache=1';
}