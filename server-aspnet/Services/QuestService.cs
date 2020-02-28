using QuestAPI.Models;
using MongoDB.Driver;
using System.Collections.Generic;
using System.Linq;

namespace QuestAPI.Services
{
    public class QuestService
    {
        private readonly IMongoCollection<Quest> _quests;

        public QuestService(IQuestDatabaseSettings settings)
        {
            var client = new MongoClient(settings.ConnectionString);
            var database = client.GetDatabase(settings.DatabaseName);

            _quests = database.GetCollection<Quest>(settings.QuestsCollectionName);
        }

        public List<Quest> Get() =>
            _quests.Find(quest => true).ToList();

        public Quest Create(Quest quest)
        {
            _quests.InsertOne(quest);
            return quest;
        }
    }
}