const sql = require('mssql');

module.exports = async function (context, req) {
    try {
        // Conectarse a la base de datos
        await sql.connect(process.env.SQL_CONNECTION_STRING);

        // Ejecutar una consulta SQL
        const result = await sql.query('SELECT * FROM MyTable');

        // Devolver los resultados
        context.res = {
            status: 200,
            body: result.recordset
        };
    } catch (err) {
        // Manejar errores
        context.res = {
            status: 500,
            body: err.message
        };
    }
};