const $form = document.getElementsByName("form_entrevista");

$form.addEventListener("submit", handleSubmit);

function handleSubmit(event) {
  const form = new FormData(this);
  $buttonMailto.setAttribute(
    "href",
    `mailto:andresdesarrollo.jp@gmail.com?subject=${"Formulario Aspirantes"}
    &body=
    Nombre: ${form.get("nombre")} \n
    Cédula: ${form.get("cedula")} \n
    Correo: ${form.get("telefono")} \n
    Experiencia como modelo: ${form.get("exp_model")} \n
    Tiempo como modelo: ${form.get("exp_tiempo")} \n
    Preferencia de páginas: ${form.get("preferencia")} \n
    Experiencia Servicio al cliente: ${form.get("exp_servi")} \n
    Tiempo en servicio al cliente: ${form.get("tiempo-servi")} \n
    Percances en horario laboral: ${form.get("percance")} \n
    Como nos encuentra: ${form.get("encontrar")} \n
    Nivel Académico: ${form.get("academico")} \n
    Nivel de Inglés: ${form.get("ingles")} \n
    Nivel de Informática: ${form.get("informatica")} \n
    Horario de preferencia: ${form.get("horario")} \n
    Hijos: ${form.get("hijos")} \n
    Motivación: ${form.get("motivacion")} \n
    Dudas: ${form.get("dudas")}`
  );

  $buttonMailto.click();
  alert("Gracias por llenar nuestro formulario!! Pronto nos comunicaremos contigo.");
}
