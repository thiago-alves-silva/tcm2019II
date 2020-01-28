using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Web;

namespace siteEmpresaASP.Models
{
    public class Procedimento
    {
        public int idproced { get; set; }
        [Required(ErrorMessage ="Digite o nome do procedimento")]
        public string nomeproced { get; set; }
        [Required(ErrorMessage ="Escolha o tipo de procedimento")]
        public string tipoproced { get; set; }
        [Required(ErrorMessage ="Insira o valor")]
        public decimal valorproced { get; set; }
    }
}