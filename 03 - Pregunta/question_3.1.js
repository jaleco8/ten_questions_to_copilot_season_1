// Expresión regular para validar un correo electrónico
const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

// Expresión regular para validar una URL
const urlRegex = /^(ftp|http|https):\/\/[^ "]+$/;

// Expresión regular para validar un número de teléfono
const phoneRegex = /^\d{10}$/;

// Expresión regular para validar una fecha en formato YYYY-MM-DD
const dateRegex = /^\d{4}-\d{2}-\d{2}$/;

// Expresión regular para validar una dirección IP
const ipRegex = /^([0-9]{1,3}\.){3}[0-9]{1,3}$/;

// Ejemplos de uso
const email = 'example@example.com';
const url = 'https://www.example.com';
const phone = '1234567890';
const date = '2022-01-01';
const ip = '192.168.0.1';

console.log(emailRegex.test(email)); // true
console.log(urlRegex.test(url)); // true
console.log(phoneRegex.test(phone)); // true
console.log(dateRegex.test(date)); // true
console.log(ipRegex.test(ip)); // true