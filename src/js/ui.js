// ❌ ELIMINAR: export function ...
// ✅ Funciones normales:

function toggleCollapsible(element) {
  element.classList.toggle("active");
  element.nextElementSibling.classList.toggle("open");
}

function handleSubmit(event) {
  event.preventDefault();
  const input1 = document.getElementById("input1").value;
  const input2 = document.getElementById("input2").value;
  const result = Number(input1) + Number(input2);
  
  document.getElementById("phpResult").innerHTML = `<strong>Entrada:</strong> ${input1}, ${input2}<br><strong>Resultado:</strong> ${result}`;
  document.getElementById("jsResult").innerHTML = `<strong>Entrada:</strong> ${input1}, ${input2}<br><strong>Resultado:</strong> ${result}`;
  document.getElementById("solutionSection").scrollIntoView({behavior: "smooth", block: "nearest"});
  
  return false;
}

function clearForm() {
  document.getElementById("exerciseForm").reset();
}

function expandDiagram(event) {
  event.stopPropagation();
  console.log("Expandir diagrama - Lógica a implementar");
}

function initUIEvents() {
  document.querySelectorAll(".diagram-expand-btn").forEach(btn => {
    btn.addEventListener("click", expandDiagram);
  });
}

function copyCode(codeId, event) {
  const code = document.getElementById(codeId).textContent;
  const button = event && event.target ? event.target : document.querySelector(".copy-btn");
  
  navigator.clipboard.writeText(code).then(() => {
    showCopyFeedback(button);
  }).catch(err => {
    fallbackCopyCode(code, button);
  });
}

function showCopyFeedback(button) {
  const originalHTML = button.innerHTML;
  button.innerHTML = "✅ Copiado";
  button.style.background = "linear-gradient(135deg, #10b981 0%, #059669 100%)";
  button.style.boxShadow = "0 4px 12px rgba(16, 185, 129, 0.5)";
  
  setTimeout(() => {
    button.innerHTML = originalHTML;
    button.style.background = "";
    button.style.boxShadow = "";
  }, 2000);
}

function fallbackCopyCode(code, button) {
  const textarea = document.createElement("textarea");
  textarea.value = code;
  document.body.appendChild(textarea);
  textarea.select();
  document.execCommand("copy");
  document.body.removeChild(textarea);
  
  const originalHTML = button.innerHTML;
  button.innerHTML = "✅ Copiado";
  setTimeout(() => {
    button.innerHTML = originalHTML;
  }, 2000);
}