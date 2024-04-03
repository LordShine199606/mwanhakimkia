
const scriptURL = 'https://script.google.com/macros/s/AKfycbwC6g8mm3xXVaqzPKEZKJcWRcJ0Cb6W5LM6RBs-KrcrLqvrAl-oW-lOuUwn3S0-aOvR/exec'

const form = document.forms['contact-form']

form.addEventListener('submit', e => {
 e.preventDefault()
 fetch(scriptURL, { method: 'POST', body: new FormData(form)})
 .then(response => alert("Thank you! your form is submitted successfully." ))
 .then(() => { window.location.reload(); })
 .catch(error => console.error('Error!', error.message))
})