using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Web;

namespace siteEmpresaASP.Models
{
    public class Conta
    {
        [Required(ErrorMessage ="Login obrigatório!", AllowEmptyStrings =false)]
        [StringLength(20, MinimumLength = 5,ErrorMessage ="O login deve conter pelo menos 5 caracteres")]
        public string login { get; set; }
        [Required(ErrorMessage = "Senha obrigatório!", AllowEmptyStrings = false)]
        [StringLength(20, MinimumLength = 5, ErrorMessage = "A senha deve conter pelo menos 5 caracteres")]
        public string senha { get; set; }
    }
}