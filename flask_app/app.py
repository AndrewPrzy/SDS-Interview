from flask import Flask, send_file
import os

app = Flask(__name__)

#Base Route
@app.route("/")
def default():
    return "<h1>Andrew Przybocki's Technical Interview!</h1>"

#Route to serve Frederick, MD forecast data to User Interface
@app.route("/get-Frederick", methods=["GET"])
def getFrederick():
    filepath = "/mnt/c/Users/aprzy/Documents/sdsProject/flask_app/data/frederickForecast.html"

    if (os.path.exists(filepath)):
        return send_file(filepath, mimetype='text/html')

#Route to serve Scottsdale, AZ forecast data to User Interface
@app.route("/get-Scottsdale", methods=["GET"])
def getScottsdale():
    filepath = "/mnt/c/Users/aprzy/Documents/sdsProject/flask_app/data/scottsdaleForecast.html"

    if (os.path.exists(filepath)):
        return send_file(filepath, mimetype='text/html')

#Route to serve New York, NY forecast data to User Interface
@app.route("/get-NewYork", methods=["GET"])
def getNewYork():
    filepath = "/mnt/c/Users/aprzy/Documents/sdsProject/flask_app/data/newYorkForecast.htm"

    if (os.path.exists(filepath)):
        return send_file(filepath, mimetype='text/html')

