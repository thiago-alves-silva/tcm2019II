using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Web;

namespace siteEmpresaASP.Models
{
    public class Cliente
    {
        [Required(ErrorMessage = "Informe o nome", AllowEmptyStrings =false)]
        [StringLength(60,MinimumLength =4, ErrorMessage ="Nome de pelo menos 4 de caracteres")]
        [RegularExpression(@"^[ a-zA-Z áàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ]*$", ErrorMessage ="Nome inválido")]
        public string nomeCli { get; set; }
        [Required(ErrorMessage = "Informe o CPF", AllowEmptyStrings = false)]
        [StringLength(14, MinimumLength = 14, ErrorMessage = "CPF incompleto")]
        [RegularExpression(@"\d{3}\.\d{3}\.\d{3}-\d{2}$", ErrorMessage = "Insira um CPF válido!")]
        public string cpfCli { get; set; }
        [Required(ErrorMessage = "Informe o RG", AllowEmptyStrings = false)]
        [StringLength(12, MinimumLength = 12, ErrorMessage = "RG incompleto")]
        [RegularExpression(@"^(\d{2}\x2E\d{3}\x2E\d{3}[-]\d{1})$|^(\d{2}\x2E\d{3}\x2E\d{3})$", ErrorMessage = "Insira um RG válido!")]
        public string rgCli { get; set; }
        [Required(ErrorMessage = "Informe o e-mail", AllowEmptyStrings = false)]
        [RegularExpression(@"^([\w\.\-]+)@([\w\-]+)((\.(\w){2,3})+)$", ErrorMessage = "E-mail inválido")]
        public string emailCli { get; set; }
        [Required(ErrorMessage = "Informe a data de nasc.", AllowEmptyStrings = false)]
        public DateTime datanCli { get; set; }
        [Required(ErrorMessage = "Informe o telefone", AllowEmptyStrings = false)]
        [StringLength(15, MinimumLength = 14, ErrorMessage = "Telefone inválido")]
        [RegularExpression(@"^\([1-9]{2}\) (?:[2-8]|9[1-9])[0-9]{3}\-[0-9]{4}$", ErrorMessage = "Insira um telefone válido!")]
        public string telCli { get; set; }
        public int idcli { get; set; }
    }
}