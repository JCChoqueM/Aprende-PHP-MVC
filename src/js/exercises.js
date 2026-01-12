// ❌ ELIMINAR: import {chapters} from "./data.js";
// ❌ ELIMINAR: import {closeSidebar, restoreIndexCollapseState} from "./sidebar.js";
// ❌ ELIMINAR: export function ...
// ✅ Solo funciones normales (chapters ya está definido globalmente en data.js)


function toggleChapter(chapterId, headerElement) {
  const exercisesList = document.getElementById("exercises-" + chapterId);
  headerElement.classList.toggle("active");
  exercisesList.classList.toggle("open");
}

function loadExercise(chapterId, exerciseNum, exerciseElement) {
  if (window.innerWidth <= 968) {
    closeSidebar();
  }
  
  document.querySelectorAll(".exercise-item").forEach(item => item.classList.remove("active"));
  exerciseElement.classList.add("active");
  
  document.querySelectorAll(".chapter-header").forEach(header => header.classList.remove("active"));
  const chapterHeader = document.getElementById("chapter-" + chapterId);
  if (chapterHeader) {
    chapterHeader.classList.add("active");
  }
  
  document.getElementById("exerciseTitle").textContent = `Capítulo ${chapterId} - Ejercicio ${exerciseNum}`;
  document.getElementById("chapterBadge").textContent = "Capítulo " + chapterId;
  document.getElementById("exerciseDescription").innerHTML = `
    <p><strong>📝 Descripción del ejercicio ${exerciseNum}:</strong></p>
    <p>Este es un ejemplo de descripción del ejercicio ${exerciseNum} del capítulo ${chapterId}.</p>
  `;
}