using System;
using System.Collections.Generic;
using System.Data.SqlClient;
using System.Linq;
using System.Web;

namespace siteEmpresaASP
{
    public class Database:IDisposable
    {
        private readonly SqlConnection conexao;
        public SqlConnection Banco()
        {
            var conexao = new SqlConnection(@"Data Source=DESKTOP-85UUUDB\SQLEXPRESS; user id=sa; password=1234567; initial catalog=tcmmb");
            conexao.Open();
            return conexao;
        }
        public void ExecutaComando(string StrQuery)
        {
            var conexao = new SqlConnection(@"Data Source=DESKTOP-85UUUDB\SQLEXPRESS; user id=sa; password=1234567; initial catalog=tcmmb");
            conexao.Open();
            var vComando = new SqlCommand
            {
                CommandText = StrQuery,
                CommandType = System.Data.CommandType.Text,
                Connection = Banco()
            };
            vComando.ExecuteNonQuery();
        }
        public SqlDataReader RetornaComando(string StrQuery)
        {
            var comando = new SqlCommand(StrQuery, Banco());
            return comando.ExecuteReader();
        }
        public void Dispose()
        {
            if(conexao.State==System.Data.ConnectionState.Open) conexao.Close();
        }
    }
}