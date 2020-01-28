using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using siteEmpresaASP.Models;
using System.Data.SqlClient;

namespace siteEmpresaASP.Controllers
{
    public class ContaController : Controller
    {
        [HttpGet]
        public ActionResult Login()
        {
            if (Session["user"] == null)
            {
                return View();
            }
            else
            {
                return Redirect("../Adm/Dashboard");
            }
        }
        [HttpPost]
        public ActionResult Verifica(Conta conta)
        {
            if (ModelState.IsValid)
            {
                Database banco = new Database();
                SqlDataReader dr = banco.RetornaComando(string.Format("select * from Login where usuario='" + conta.login + "' and senha='" + conta.senha + "'"));
                if (dr.Read())
                {
                    Session.Add("user", dr["usuario"]);
                    Session.Timeout = 60;
                    return Redirect("../Adm/Dashboard");
                }
                else
                {
                    ViewBag.ErroAut = "LOGIN OU SENHA INVÁLIDOS!";
                    return View("Login");
                }
            }
            else { return View("Login"); }
        }
    }
}