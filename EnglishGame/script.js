
var bonus = [
  "DDOS attack : You have to give half your cards to the other players equally",
  "SQL Injection : Lose all your Database/Datacenter cards",
  "Hack : You have to reconstruct your website, you lose the following cards : Navbar, Footer and H1",
  "Phishing Attack : Lose the next turn",
  "Bad SEO : Your site is not very SEO friendly, you skip the next turn",
  "Cybersquatting : Your domain name is being squatted, you have to exchange your deck with a random player",
  "Bad moderation : Your website doesn’t follow the rules cited by the RGPD, you lose the following cards: Images, Filtering, Database and User interactions",
  "Overpriced : You lose your Basket and Images cards",
  "Copyright infringement : You lose the following cards: Images, Description, Topics",
  "Javascript bug : Your buttons are broken, you lose the CTA cards",
  "Cross Site Scripting : Your input are not sanitazied, you lose the following cards: Contact form, Account safety, User interaction. Then draw one card from the deck",
  "Great SEO : Draw 2 cards from the deck",
  "Good Public Image : Your site have a favorable reputation on the internet. Pick one card of your choice from any player",
  "Cookies : You are transparent with your users and don't annoy them with your cookies popup. You can play two turns in a row",
];

function GetValue()
{
    var random = bonus[Math.floor(Math.random() * bonus.length)];
    //alert(random);
    document.getElementById("message").innerHTML = random;
    // document.getElementById("title").style.visibility = "hidden";
}
