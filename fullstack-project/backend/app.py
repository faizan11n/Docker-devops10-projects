from flask import Flask 

app = Flask(__name__)


@app.route("/")
def home():
   return "Backend is running! This is the Python service."



@app.route("/health")
def health():
    return {"status": "backend ok"}


if __name__ == "__main__":
   app.run(host="0.0.0.0", port=5000)
