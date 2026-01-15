from flask import Flask

# instalamos la aplicación
app = Flask(__name__)

# Rutas
@app.route("/")
def home():
    return "hola mundo"

@app.route("/adios")
def adios():
    return "adios"

@app.route("/saludo/<nombre>")
def saludo(nombre):
    return f"Hola {nombre}"

@app.route("/par/<int:numero>")
def par(numero):
    if numero % 2 == 0:
        return f"El {numero} es par"
    else:
        return f"El {numero} es impar"

@app.route("/doble/<int:numero2>")
def doble(numero2):
    double = numero2 + numero2
    return f"El doble del número {numero2} es {double}"


def calcularFactorial(n):
    if n == 0:
        return 1
    else:
        return n * calcularFactorial(n - 1)




@app.route("/factorial/<int:factorialnumero>")
def factorial(factorialnumero):
    resultado =calcularFactorial(factorialnumero)
    return f"El factorial de {factorialnumero} es {resultado}"
    

    
  


# inicializar servidor
if __name__ == '__main__':
    app.run(debug=True)

