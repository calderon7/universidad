from flask import Flask, render_template
import requests
app = Flask(__name__)


@app.route('/')
def index():
    datos = requests.get('https://api.dailymotion.com/videos?channel=music&limit=10')
    datos_json = datos.json()
    print(datos_json)
    return render_template('index.html', datos=datos_json['list'])

if __name__ == '__main__':
    app.run(host='127.0.0.1', port=8000, debug=True)
