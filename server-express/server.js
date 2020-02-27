require('dotenv').config();
const express = require('express');
const app = express();
const cors = require('cors');

const mongoose = require('mongoose');
mongoose.connect(process.env.DATABASE_URL, { useNewUrlParser: true });
const db = mongoose.connection;
db.on('error', (error) => console.error(error));
db.once('open', () => console.log('Connected to database!'));

app.use(express.json());
app.use(cors());

const questsRouter = require('./routes/quests');
app.use('/quests', questsRouter);

app.listen(3000, () => console.log('Server started!'));