using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Web;

namespace siteEmpresaASP.Models
{
    public class Cpf
    {
        [Required(ErrorMessage ="Insira o CPF")]
        [RegularExpression(@"\d{3}\.\d{3}\.\d{3}-\d{2}$", ErrorMessage = "Insira um CPF válido!")]
        public string cpf  { get; set; }
    }
}