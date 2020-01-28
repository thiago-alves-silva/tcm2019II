using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Web;

namespace siteEmpresaASP.Models
{
    public class Produto
    {
        public int idprod { get; set; }
        [Required(ErrorMessage ="Insira o nome do produto.", AllowEmptyStrings =false)]
        public string nomeprod { get; set; }
        [Required(ErrorMessage = "Insira a marca do produto.", AllowEmptyStrings = false)]
        public string marca { get; set; }
        [Required(ErrorMessage = "Insira a quantidade de produtos.")]
        [RegularExpression(@"\d+", ErrorMessage = "Insira apenas números!")]
        public int quantidade { get; set; }

    }
}