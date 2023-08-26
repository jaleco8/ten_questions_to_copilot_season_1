// Expresiones regulares
const regexes = {
  email: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
  url: /^(ftp|http|https):\/\/[^ "]+$/,
  phone: /^\d{10}$/,
  date: /^\d{4}-\d{2}-\d{2}$/,
  ip: /^([0-9]{1,3}\.){3}[0-9]{1,3}$/
};

// Ejemplos de uso
const examples = {
  email: 'example@example.com',
  url: 'https://www.example.com',
  phone: '1234567890',
  date: '2022-01-01',
  ip: '192.168.0.1'
};

// Validar expresiones regulares
for (const key in regexes) {
  console.log(`${key}: ${regexes[key].test(examples[key])}`);
}