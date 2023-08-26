function validateRegex(regex, input) {
  return regex.test(input);
}

// Ejemplos de uso
const examples = [
  { name: 'email', input: 'example@example.com', regex: /^[^\s@]+@[^\s@]+\.[^\s@]+$/ },
  { name: 'url', input: 'https://www.example.com', regex: /^(ftp|http|https):\/\/[^ "]+$/ },
  { name: 'phone', input: '1234567890', regex: /^\d{10}$/ },
  { name: 'date', input: '2022-01-01', regex: /^\d{4}-\d{2}-\d{2}$/ },
  { name: 'ip', input: '192.168.0.1', regex: /^([0-9]{1,3}\.){3}[0-9]{1,3}$/ }
];

// Validar expresiones regulares
for (const example of examples) {
  console.log(`${example.name}: ${validateRegex(example.regex, example.input)}`);
}