<!DOCTYPE html>
<html>
  <head>
    <title>Shadow DOM Example</title>

    <script type="text/javascript">

      const template = document.createElement('template');
template.innerHTML = `
<style>
button {
  background: #1E88E5;
  color: white;
  padding: 2rem 4rem;
  border: 0;
  font-size: 1.5rem;
}
</style>
<button>Sup?</button>`;

class WhatsUp extends HTMLElement {

  constructor() {
    super();
    this.attachShadow({mode: 'open'});
    this.shadowRoot.appendChild(template.content.cloneNode(true));
    const button = this.shadowRoot.querySelector("button");
    button.addEventListener("click", this.handleClick);
  }

  handleClick(e) {
    alert("Sup?");
  }

}

window.customElements.define('whats-up', WhatsUp);

    </script>

  </head>
  <body>
      <whats-up></whats-up>
  </body>
</html>
