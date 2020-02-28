namespace QuestAPI.Models
{
    public class QuestDatabaseSettings : IQuestDatabaseSettings
    {
        public string QuestsCollectionName { get; set; }
        public string ConnectionString { get; set; }
        public string DatabaseName { get; set; }
    }

    public interface IQuestDatabaseSettings
    {
        string QuestsCollectionName { get; set; }
        string ConnectionString { get; set; }
        string DatabaseName { get; set; }
    }
}