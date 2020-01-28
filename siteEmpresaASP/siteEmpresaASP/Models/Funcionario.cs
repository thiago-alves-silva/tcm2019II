using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Web;

namespace siteEmpresaASP.Models
{
    public class Funcionario
    {
        public char status { get; set; }
        public int idcargo { get; set; }

        public int idfunc { get; set; }

        [Required(ErrorMessage ="Informe o nome", AllowEmptyStrings =false)]
        [StringLength(60, MinimumLength = 4, ErrorMessage = "Nome de pelo menos 4 de caracteres")]
        [RegularExpression(@"^[ a-zA-Z áàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ]*$", ErrorMessage = "Nome inválido")]
        public string nomeFun { get; set; }
        [Required(ErrorMessage = "Informe o CPF", AllowEmptyStrings = false)]
        [StringLength(14, MinimumLength = 14, ErrorMessage = "CPF incompleto")]
        [RegularExpression(@"\d{3}\.\d{3}\.\d{3}-\d{2}$", ErrorMessage = "Insira um CPF válido!")]
        public string cpfFun { get; set; }
        [Required(ErrorMessage = "Informe o RG", AllowEmptyStrings = false)]
        [StringLength(12, MinimumLength = 12, ErrorMessage = "RG incompleto")]
        [RegularExpression(@"^(\d{2}\x2E\d{3}\x2E\d{3}[-]\d{1})$|^(\d{2}\x2E\d{3}\x2E\d{3})$", ErrorMessage = "Insira um RG válido!")]
        public string rgFun { get; set; }
        [Required(ErrorMessage = "Informe o telefone", AllowEmptyStrings = false)]
        [StringLength(15, MinimumLength = 14, ErrorMessage = "Telefone inválido")]
        [RegularExpression(@"^\([1-9]{2}\) (?:[2-8]|9[1-9])[0-9]{3}\-[0-9]{4}$", ErrorMessage = "Insira um telefone válido!")]
        public string telFun { get; set; }
        [Required(ErrorMessage = "Informe o e-mail", AllowEmptyStrings = false)]
        [RegularExpression(@"^([\w\.\-]+)@([\w\-]+)((\.(\w){2,3})+)$", ErrorMessage = "E-mail inválido")]
        public string emailFun { get; set; }
        [Required(ErrorMessage = "Informe o endereço", AllowEmptyStrings = false)]
        public string enderecoFun { get; set; }
        [Required(ErrorMessage = "Informe a data de nasc.", AllowEmptyStrings = false)]
        public DateTime datanFun { get; set; }
        [Required(ErrorMessage = "Informe o cargo", AllowEmptyStrings = false)]
        public string nmcargo { get; set; }
    }
}