// ❌ ELIMINAR: import {chapters} from "./data.js";
// ❌ ELIMINAR: import {closeSidebar, restoreIndexCollapseState} from "./sidebar.js";
// ❌ ELIMINAR: export function ...
// ✅ Solo funciones normales (chapters ya está definido globalmente en data.js)

function generateChapters() {
  const accordion = document.getElementById("chapterAccordion");
  
  chapters.forEach(chapter => {
    const li = document.createElement("li");
    
    const header = document.createElement("div");
    header.className = "chapter-header";
    header.id = "chapter-" + chapter.id;
    header.innerHTML = `<span>📖 Cap ${chapter.id}: ${chapter.name}</span><span class="chapter-icon">▼</span>`;
    header.onclick = (e) => {
      e.stopPropagation();
      toggleChapter(chapter.id, header);
    };
    
    const exercisesList = document.createElement("div");
    exercisesList.className = "exercises-list";
    exercisesList.id = "exercises-" + chapter.id;
    
    chapter.exercises.forEach((exercise, index) => {
      const exerciseItem = document.createElement("div");
      exerciseItem.className = "exercise-item";
      exerciseItem.id = `exercise-${chapter.id}-${index + 1}`;
      exerciseItem.textContent = exercise;
      exerciseItem.onclick = (e) => {
        e.stopPropagation();
        loadExercise(chapter.id, index + 1, exerciseItem);
      };
      exercisesList.appendChild(exerciseItem);
    });
    
    li.appendChild(header);
    li.appendChild(exercisesList);
    accordion.appendChild(li);
  });
  
  restoreIndexCollapseState();
}

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