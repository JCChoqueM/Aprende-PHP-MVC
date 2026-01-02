// ❌ ELIMINAR todas las líneas con export
// ✅ SOLO funciones normales:

function toggleSidebar() {
  document.getElementById("sidebar").classList.toggle("active");
  document.getElementById("sidebarOverlay").classList.toggle("active");
}

function closeSidebar() {
  document.getElementById("sidebar").classList.remove("active");
  document.getElementById("sidebarOverlay").classList.remove("active");
}

function toggleIndexCollapse() {
  const sidebar = document.getElementById("sidebar");
  sidebar.classList.toggle("collapsed");
  const isCollapsed = sidebar.classList.contains("collapsed");
  localStorage.setItem("indexCollapsed", isCollapsed);
}

function restoreIndexCollapseState() {
  const isCollapsed = localStorage.getItem("indexCollapsed") === "true";
  const sidebar = document.getElementById("sidebar");
  if (isCollapsed) {
    sidebar.classList.add("collapsed");
  }
}

function initSidebarEvents() {
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") {
      if (document.getElementById("sidebar").classList.contains("active")) {
        closeSidebar();
      }
    }
  });
}