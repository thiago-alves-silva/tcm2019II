using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Web;

namespace siteEmpresaASP.Models
{
    public class Agendamento
    {
        [Required(ErrorMessage = "Informe o CPF", AllowEmptyStrings = false)]
        [StringLength(14, MinimumLength = 14, ErrorMessage = "CPF incompleto")]
        [RegularExpression(@"\d{3}\.\d{3}\.\d{3}-\d{2}$", ErrorMessage = "Insira um CPF válido!")]
        public string cpfCli { get; set; }
        [Required(ErrorMessage = "Informe a data", AllowEmptyStrings = false)]
        public DateTime data { get; set; }
        [Required(ErrorMessage = "Informe o horário", AllowEmptyStrings = false)]
        public DateTime horario { get; set; }
        [Required(ErrorMessage = "Selecione o procedimento", AllowEmptyStrings = false)]
        public string procedimento { get; set; }
        [Required(ErrorMessage = "Selecione o tipo de pagamento", AllowEmptyStrings = false)]
        public string tipoPag { get; set; }
        [Required(ErrorMessage = "Insira o valor", AllowEmptyStrings = false)]
        public double valor { get; set; }
    }
}