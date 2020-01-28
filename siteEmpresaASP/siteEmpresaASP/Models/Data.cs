using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Web;

namespace siteEmpresaASP.Models
{
    public class Data
    {
        [Required(ErrorMessage = "Insira uma data", AllowEmptyStrings = false)]
        public string data { get; set; }
    }
}