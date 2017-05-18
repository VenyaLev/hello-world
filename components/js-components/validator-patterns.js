// settings for modules
window.SETTINGS = {

   // validator's regular expressions
   validator: {
      regexp: {
         text: /^([A-zА-яІіЇїЄє])*\s*([A-zА-яІіЇїЄє])*\s*([A-zА-яІіЇїЄє])*$/g,
         mail: /^[-\w.]+@([A-z0-9][-A-z0-9]+\.)+[A-z]{2,4}$/g,
         phone: /^(\+)?(\s)?(\d*\s?){7,}$/g,
         pass: /^.{6,}$/g,
         digitsOnly: /^\d*[\.,]?\d*$/g
      }
   }
}
