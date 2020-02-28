using QuestAPI.Models;
using QuestAPI.Services;
using Microsoft.AspNetCore.Mvc;
using System.Collections.Generic;

namespace QuestAPI.Controllers
{
    [Route("quests/")]
    [ApiController]
    public class QuestsController : ControllerBase
    {
        private readonly QuestService _questService;

        public QuestsController(QuestService questService)
        {
            _questService = questService;
        }

        [HttpGet]
        public ActionResult<List<Quest>> Get() =>
            _questService.Get();

        [HttpPost]
        public ActionResult<Quest> Create(Quest quest)
        {
            _questService.Create(quest);
            return CreatedAtRoute("GetQuest", new { id = quest.Id.ToString() }, quest);
        }
    }
}