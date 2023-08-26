function validateRegex(regex, input) {
    return regex.test(input);
}

// Ejemplos de uso
const examples = {
    email: 'example@example.com',
    url: 'https://www.example.com',
    phone: '1234567890',
    date: '2022-01-01',
    ip: '192.168.0.1',
    postalCode: '12345',
    ipv6: '2001:0db8:85a3:0000:0000:8a2e:0370:7334',
    mac: '01:23:45:67:89:ab',
    password: 'Password123!',
    username: 'username',
    decimal: '123.456',
    integer: '123',
    alphanumeric: 'abc123',
    letters: 'abc'
};

// Expresiones regulares
const regexes = {
    email: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
    url: /^(ftp|http|https):\/\/[^ "]+$/,
    phone: /^\d{10}$/,
    date: /^\d{4}-\d{2}-\d{2}$/,
    ip: /^([0-9]{1,3}\.){3}[0-9]{1,3}$/,
    postalCode: /^\d{5}(?:[-\s]\d{4})?$/,
    ipv6: /^([0-9a-fA-F]{1,4}:){7}[0-9a-fA-F]{1,4}$/,
    mac: /^([0-9A-Fa-f]{2}[:-]){5}([0-9A-Fa-f]{2})$/,
    password: /(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+}{"':;?/>.<,])(?=.*[^\s]).{8,}$/,
    username: /^[a-zA-Z0-9_-]{3,16}$/,
    decimal: /^\d+(\.\d+)?$/,
    integer: /^-?\d+$/,
    alphanumeric: /^[a-zA-Z0-9]+$/,
    letters: /^[a-zA-Z]+$/,
};

// Validar expresiones regulares
for (const key in regexes) {
    console.log(`${key}: ${validateRegex(regexes[key], examples[key])}`);
}