using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Web;

namespace siteEmpresaASP.Models
{
    public class AlterarAgendamento
    {
        [Required(ErrorMessage = "Informe a data", AllowEmptyStrings = false)]
        public DateTime data { get; set; }
        [Required(ErrorMessage = "Informe o horário", AllowEmptyStrings = false)]
        public DateTime hora { get; set; }
        [Required(ErrorMessage = "Selecione o procedimento", AllowEmptyStrings = false)]
        public string procedimento { get; set; }
    }
}