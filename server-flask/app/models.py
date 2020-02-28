from app import db

class Quest(db.Model):
    name = db.Column(db.String(256), primary_key=True, index=True, unique=True)
    description = db.Column(db.String(256), index=True, unique=True)

    def __repr__(self):
        return '<Quest> {}'.format(self.name)