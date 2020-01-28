using System;
using System.Collections.Generic;
using System.Data.SqlClient;
using System.Linq;
using System.Web;
using System.Web.Mvc;
using siteEmpresaASP.Models;

namespace siteEmpresaASP.Controllers
{
    public class AdmController : Controller
    {
        Database banco = new Database();
        Cpf cpf = new Cpf();
        Data data = new Data();
        public ActionResult VerificaLogin(string view)
        {
            if (Session["user"] != null)
            {
                return View(view);
            }
            else
            {
                return Redirect("../Home/Index");
            }
        }
        // GET: Adm
        public ActionResult Dashboard()
        {
            return VerificaLogin("");
        }
        public ActionResult Agendamento()
        {
            return VerificaLogin("");
        }
        public ActionResult AlterarAgenda(int id, DateTime hora, DateTime data, string nmproced, string nmcli, string cpfcli)
        {
            SqlDataReader leitor = banco.RetornaComando("select t.tipo from Procedimentos as p inner join tipo_proced as t on p.idtipo_proced = t.idtipo_proced where nmproced ='"+nmproced+"'");
            ViewBag.tipo = leitor.Read() ? leitor["tipo"] : null;
            ViewBag.id = id;
            ViewBag.hora = hora.ToString("hh:mm");
            ViewBag.data = data.ToString("yyyy-MM-dd");
            ViewBag.nmproced = nmproced;
            ViewBag.nmcli = nmcli;
            ViewBag.cpfcli = cpfcli;
            

            return VerificaLogin("Altera/AlterarAgenda");

        }
        [HttpPost]
        public ActionResult AlterarAgenda(AlterarAgendamento alterar)
        {
            if (ModelState.IsValid)
            {
                SqlDataReader leitor = banco.RetornaComando(string.Format("select idproced from Procedimentos where nmproced='{0}'", alterar.procedimento));
                banco.ExecutaComando(string.Format("update Agendamento set horaagend = convert(time,'{0}', 103), dataagend=convert(date,'{1}', 103), idproced='{2}'", alterar.hora, alterar.data, leitor.Read() ? leitor["idproced"] : null));
                return Redirect("../ConsultarAgenda");
            }
            else { return VerificaLogin(""); }
        }
        public ActionResult CadProced()
        {
            return VerificaLogin("");
        }
        [HttpPost]
        public ActionResult CadProced(Procedimento proced)
        {
            SqlDataReader leitor = banco.RetornaComando("select idtipo_proced from tipo_proced where tipo='"+proced.tipoproced+"'");
            banco.ExecutaComando(string.Format("insert into Procedimentos(nmproced,idtipo_proced,valor) values('{0}','{1}','{2}')", proced.nomeproced, leitor.Read() ? leitor["idtipo_proced"] : null, proced.valorproced));
            ViewBag.sucesso = "Procedimento Cadastrado";
            return VerificaLogin("");
        }
        public ActionResult CadCli()
        {
            return VerificaLogin("");
        }
        public ActionResult CadFunc()
        {
            return VerificaLogin("");
        }
        public ActionResult Consulta()
        {
            return VerificaLogin("Consulta/Consulta");
        }
        public ActionResult ConsultarAgenda()
        {
            return VerificaLogin("Consulta/ConsultarAgenda");
            
        }
        public ActionResult ExcluirProd(int id)
        {
            banco.ExecutaComando(string.Format("delete from Estoque where idprod = '{0}'", id));
            banco.ExecutaComando(string.Format("delete from Produto where idprod = '{0}'", id));
            return Redirect("../Estoque");
        }

        public ActionResult ExcluirCli(int id)
        {
            banco.ExecutaComando(string.Format("delete from Cliente where idcli = '{0}'", id));
            return Redirect("../ConsultarCliente");
        }
        public ActionResult ExcluirAgenda(int id)
        {
            banco.ExecutaComando(string.Format("delete from Agendamento where idagend = '{0}'", id));
            return Redirect("../ConsultarAgenda");
        }
        public ActionResult ConsultarCliente()
        {
            return VerificaLogin("Consulta/ConsultarCliente");
        }
        public ActionResult ConsultarClienteC(FormCollection frm)
        {
            cpf.cpf = frm["cpf"];
            ViewBag.cpf = cpf.cpf;
            return VerificaLogin("Consulta/ConsultarClienteC");
        }
        public ActionResult AlterarCli(int id)
        {
            SqlDataReader leitor = banco.RetornaComando("select * from Cliente where idcli ='"+id+"'");
            if (leitor.Read())
            {
                var cli = new Cliente()
                {
                    idcli = Convert.ToInt32(leitor["idcli"]),
                    nomeCli = leitor["nomecli"].ToString(),
                    cpfCli = leitor["cpfcli"].ToString(),
                    rgCli = leitor["rgcli"].ToString(),
                    emailCli = leitor["emailcli"].ToString(),
                    datanCli = Convert.ToDateTime(leitor["nasc"]),
                    telCli = leitor["tel"].ToString()
                };
                ViewBag.cli = cli;
                return VerificaLogin("Altera/AlterarCli");
            }
            else 
            { 
                ViewBag.msg = "Cliente inválido";
                return VerificaLogin("Consulta/ConsultarCliente");
            }
        }
        [HttpPost]
        public ActionResult AlterarCli(Cliente cli)
        {
            if (ModelState.IsValid)
            {
                banco.ExecutaComando(string.Format("Update Cliente set nomecli='"+cli.nomeCli+"', cpfcli='"+cli.cpfCli+"', rgcli='"+cli.rgCli+"', emailcli='"+cli.emailCli+"', nasc='"+cli.datanCli+"', tel='"+cli.telCli+"' where idcli ='"+cli.idcli+"'"));
                ViewBag.sucesso = "Informações alteradas com sucesso";
                ViewBag.cli = cli;
                return VerificaLogin("Altera/AlterarCli");
            }
            else { return VerificaLogin("Altera/AlterarCli"); }
        }
            public ActionResult ConsultarFuncionario()
        {
            return VerificaLogin("Consulta/ConsultarFuncionario");
        }
        [HttpPost]
        public ActionResult ConsultarFuncionarioC(FormCollection frm)
        {
            cpf.cpf = frm["cpf"];
            ViewBag.cpf = cpf.cpf;
            return VerificaLogin("Consulta/ConsultarFuncionarioC");           
        }
        public ActionResult AlterarFunc(int id) 
        {
            SqlDataReader leitor = banco.RetornaComando("select * from Funcionario where idfunc='"+id+"'");
            if (leitor.Read())
            {
                var f = new Funcionario()
                { 
                    idfunc = Convert.ToInt32(leitor["idfunc"]),
                    nomeFun = leitor["nmfunc"].ToString(),
                    cpfFun = leitor["cpffunc"].ToString(),
                    rgFun=leitor["rgfunc"].ToString(),
                    telFun = leitor["tel"].ToString(),
                    emailFun = leitor["emailfunc"].ToString(),
                    enderecoFun = leitor["endereco"].ToString(),
                    datanFun = Convert.ToDateTime(leitor["nascfunc"]),
                    idcargo = Convert.ToInt32(leitor["idcargo"]),
                    status = Convert.ToChar(leitor["status"])
                };

                SqlDataReader leitor2 = banco.RetornaComando("select nmcargo from Cargo where idcargo='"+f.idcargo+"'");
                ViewBag.nmcargo = leitor2.Read() ? leitor2["nmcargo"] : null;
                ViewBag.f = f;
                ViewBag.data = f.datanFun.ToString("yyyy-MM-dd");
                return VerificaLogin("Altera/AlterarFunc");
            }
            else
            return VerificaLogin("Consulta/ConsultarFuncionario");
        }
        [HttpPost]
        public ActionResult AlterarFunc(Funcionario func)
        {
            if (ModelState.IsValid)
            {
                SqlDataReader leitor = banco.RetornaComando("select idcargo from Cargo where nmcargo='" + func.nmcargo + "'");
                banco.ExecutaComando(string.Format("update Funcionario set nmfunc ='{0}', cpffunc='{1}',rgfunc='{2}', tel='{3}',emailfunc='{4}',endereco='{5}',nascfunc=convert(date,'{6}',103),idcargo='{7}',status='{8}' where idfunc={9}", func.nomeFun, func.cpfFun, func.rgFun, func.telFun, func.emailFun, func.enderecoFun, func.datanFun, leitor.Read() ? leitor["idcargo"] : null, func.status, func.idfunc));
                return Redirect("../ConsultarFuncionario");
            }
            else return RedirectToAction("AlterarFunc",new { id= func.idfunc });
        }
        [HttpPost]
        public ActionResult ConsultarAgendaDE(FormCollection frm)
        {
            data.data = frm["data"] ;
            ViewBag.Datinha = data.data;
            if (ModelState.IsValid)
            {
                return VerificaLogin("Consulta/ConsultarAgendaDE");
            }
            else { return VerificaLogin(""); }
        }
        public ActionResult Estoque()
        {
            return VerificaLogin("");
        }
        public ActionResult CadProd()
        {
            return VerificaLogin("");
        }
        [HttpPost]
        public ActionResult CadProd(Produto produto)
        {

            if (ModelState.IsValid)
            {
                string comando = string.Format("insert into Produto(nmprod,marca) values ('{0}','{1}')", produto.nomeprod, produto.marca );
                banco.ExecutaComando(comando);
                
                SqlDataReader leitor4 = banco.RetornaComando("select idprod from Produto where idprod=(select max(idprod) from Produto)");
                ViewBag.CadProd = "Produto cadastrado com sucesso!";
                comando = string.Format("insert into Estoque(idprod,qtdprod) values ('{0}','{1}')", leitor4.Read() ? leitor4["idprod"] : null, produto.quantidade);
                banco.ExecutaComando(comando);
                return VerificaLogin("");
            }
            return VerificaLogin("");
        }
        public ActionResult Logout()
        {
            Session.Abandon();
            return Redirect("../Conta/Login");
        }

        [HttpPost]
        public ActionResult CadFunc(Funcionario func)
        {
            if (ModelState.IsValid)
            {
                SqlDataReader leitor = banco.RetornaComando(string.Format("select idcargo from Cargo where nmcargo ='{0}'", func.nmcargo));

                string comando = string.Format("insert into Funcionario(nmfunc, cpffunc, rgfunc, tel, emailfunc, endereco, nascfunc, idcargo) values('{0}', '{1}','{2}','{3}','{4}','{5}',convert(datetime,'{6}', 103),'{7}')", func.nomeFun, func.cpfFun, func.rgFun, func.telFun, func.emailFun, func.enderecoFun, func.datanFun, leitor.Read()?leitor["idcargo"]:null);
                banco.ExecutaComando(comando);
                ViewBag.CadFunc = "Funcionário cadastrado com sucesso!";
                return VerificaLogin("");
            }
            else { return VerificaLogin(""); }
        }
        [HttpPost]
        public ActionResult CadCli(Cliente cli)
        {
            if (ModelState.IsValid)
            {
               
                //string Bsenha = string.Format("select * from Login where usuario = '{0}'", Session["user"].ToString());
                //SqlDataReader leitor = banco.RetornaComando(Bsenha);
                string comando = string.Format("insert into Cliente(nomecli, cpfcli, rgcli, tel, emailcli, nasc) values('{0}', '{1}','{2}','{3}','{4}',convert(datetime,'{5}', 103))", cli.nomeCli, cli.cpfCli, cli.rgCli, cli.telCli, cli.emailCli, cli.datanCli);
                banco.ExecutaComando(comando);
                ViewBag.CadCli = "Cliente cadastrado com sucesso!";
                return VerificaLogin("");
            }
            else { return VerificaLogin(""); }
        }
        [HttpPost]
        public ActionResult Agendamento(Agendamento agendamento)
        {
            if (ModelState.IsValid)
            {
                SqlDataReader leitor3 = banco.RetornaComando(string.Format("select idfunc from Login where usuario='{0}'", Session["user"]));
                string comando2 = string.Format("insert into Pagamento(datapag, formapag, valort, idfunc, status) values(convert(datetime,'{0}', 103), '{1}', '{2}', '{3}', 'S')", DateTime.Now, agendamento.tipoPag, Convert.ToDecimal(agendamento.valor), leitor3.Read() ? leitor3["idfunc"] : null );
                banco.ExecutaComando(comando2);

                SqlDataReader leitor4 = banco.RetornaComando("select idpag from Pagamento where idpag=(select max(idpag) from Pagamento)");

                SqlDataReader leitor = banco.RetornaComando(string.Format("select idproced from Procedimentos where nmproced='{0}'", agendamento.procedimento));
                SqlDataReader leitor2 = banco.RetornaComando(string.Format("select idcli from Cliente where cpfcli='{0}'", agendamento.cpfCli));
                string comando = string.Format("insert into Agendamento(horaagend, dataagend, idproced, idcli, idpag) values(convert(time, '{0}', 8),convert(date,'{1}', 103),'{2}', '{3}', '{4}')", agendamento.horario.ToString("hh:mm"), agendamento.data.ToString("dd/MM/yyyy"), leitor.Read()?leitor["idproced"]:null, leitor2.Read() ? leitor2["idcli"] : null, leitor4.Read() ? leitor4["idpag"] : null);
                banco.ExecutaComando(comando);
               
               
                ViewBag.Agendamento = "Consulta agendada com sucesso!";
                return VerificaLogin("");
            }
            else { return VerificaLogin(""); }
        }
    }
}