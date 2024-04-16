const $form = document.querySelector('#form_entrevista');
const $buttonMailto = document.querySelector('#mailto')

$form.addEventListener('submit', handleSubmit)

function handleSubmit(event){
    event.preventDefault();
    const form = new FormData(this);
    console.log(form.get('nombre'), form.get('correo'));
    $buttonMailto.setAttribute('href', `mailto:andresdesarrollo.jp@gmail.com?subject=${'Aspirantes'}
    &body= 
    Nombre: ${form.get('nombre')} 
    Cédula: ${form.get('cedula')}
    Correo: ${form.get('telefono')}
    Experiencia como modelo: ${form.get('exp_model')}
    Tiempo: ${form.get('exp_tiempo')}
    Preferencia de páginas: ${form.get('')}`);
    
    $buttonMailto.click()
}
