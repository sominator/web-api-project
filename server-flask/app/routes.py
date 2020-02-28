from app import app
from app import db;
from app.models import Quest
from flask import jsonify
from flask import request

@app.route('/quests', methods=['GET'])
def get_quests():
    questQuery = Quest.query.all()
    quests = {}
    for quest in questQuery:
        quests[quest.name] = quest.description
    return jsonify(quests)

@app.route('/quests', methods=['POST'])
def post_quest():
    newQuest = Quest(name=request.json['name'], description=request.json['description'])
    db.session.add(newQuest)
    db.session.commit()
    return "Quest Added!"