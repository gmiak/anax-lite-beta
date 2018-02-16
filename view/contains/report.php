<div id="contain">
  <section>
    <h1>Report</h1>
    <article>
      <header><h4>kmom01</h4></header>
      <p>
        <h5>1. Hur känns det att hoppa rakt in i klasser med PHP, gick det bra?</h5>
        Det känns ganska naturligt att börja med klasser i PHP efter oopython-kursen.
        Det finns små skillnader som att istället att använda punkt så
        använder man "->" när man ska till exempel kalla en metod eller parameter från klassen.
        Jag hittade ganska stor nytta av övningen "20 steg för att komma igång med Php (php20)"
        eftersom att det var ett tag sen jag gjorde PHP. Jag fick fräscha upp minnet och naturligtvis lära mig nya saker.

        <h5>2. Berätta om dina reflektioner kring ramverk, anax-lite och din me-sida</h5>
        Att bygga sin egen ramverk steg för steg var otroligt lärande. Man hade
        med sig ganska mycket kunskap från design-kursen där vi jobbade med anax-flat
        och oopython med flask. Jag tror att jag fick en ganska bra bild av hur en ramverk
        fungerar egentligen.

        Jag försökte hålla min ramverk ganska enkelt men samtidigt inte fullt.
        Jag skapade ett lokalt repo i Git och laddade upp det på GitHub där jag
        skapade ett motsvarande repo. Man fick fräscha up lite grann sina kunskaper
        från design-kursen. Jag fixade en frontcontroller (index.php) som tar hand om
        alla samtliga requester. Jag försökte organisera från början mina routes genom
         att dela upp de i två filler (intenal.php och base.php) för att hålla min kod
         så fin som möjligt. Sen skapade jag routes som är dynamiska med en parameter
         till routens callback. Jag implementerade ett object app-object för att kunna
         samla alla resurser i ramverket som skickas runt. För att det inte ska bli stökig
         eller kladdig med en bladning av HTML, PHP på mina sidorna använde jag vyer för att
          dela upp mina övriga sidor till exempel about.php, home.php etc..!
        Jag återanvände kunskaper från design-kursen för att styla min webbplats med CSS,
        eller rättare sagt LESS. Jag klonnade grundtemat som finns på GitHub och samlade all i ett
        eget Git-repo då blir det lättare att göra sina egna ändringar.
        Jag installerade utvecklingsmiljö för att kompilera LESS till CSS. Jag uppdaterade min makefile och
        min modules.less så att vissa uppdateringar görs automatiskt. Nu har jag en väldigt fin bas för
        att bygga vidare temat till min webbplats.

        <h5>3. Gick det bra att komma igång med MySQL, har du liknande erfarenheter sedan tidigare?</h5>
        Det gick smidigt att komma igång med MySQL. Vi har ju jobbat med SQLite eller SQLAlchemy
        från tidigare kurser på så vis hade man lite erfarenhet om hur en databas är byggd och hur
         den fungerar.
        Jag använde PHPMyAdmin för att skapa min databas och jobba med MySQL.
        PHPMyAdmin webb-baserad klient som låter dig sköta din MySQL databas via en webbgränssnitt.
        Det är ganska lätt och enkelt att skriva in SQL-kod.

      </p>
      <footer>
        <h6>report för kursmoment 1</h6>
      </footer>
      <hr>
    </article>
  </section>
</div>
