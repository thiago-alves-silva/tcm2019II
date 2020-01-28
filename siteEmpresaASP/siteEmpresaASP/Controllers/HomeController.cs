using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;

namespace siteEmpresaASP.Controllers
{
    public class HomeController : Controller
    {
        // GET: Home
        public ActionResult Index()
        {
            return View();
        }
        public ActionResult Login()
        {
            return View();
        }
        public ActionResult ServCrio()
        {
            return View("Servicos/ServCrio");
        }
        public ActionResult ServDepilacao()
        {
            return View("Servicos/ServDepilacao");
        }
        public ActionResult ServEndermo()
        {
            return View("Servicos/ServEndermo");
        }
        public ActionResult ServLimpeza()
        {
            return View("Servicos/ServLimpeza");
        }
        public ActionResult ServOrto()
        {
            return View("Servicos/ServOrto");
        }
        public ActionResult ServRadio()
        {
            return View("Servicos/ServRadio");
        }
    }
}