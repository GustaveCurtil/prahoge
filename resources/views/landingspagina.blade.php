@include('_partials._head')

<body>
    <div class="pagewrapper">

        @include('_partials.header') 

        <address>
            <p>Dr. Gerda Eggermont</p>
            <p><a href="tel:+123456789">022703399</a></p>
            <p><a href="https://maps.app.goo.gl/f1uRKZNwRBqp3q6f9" target="_blank">Kanariestraat 57, 9000 Gent</a></p>
        </address>

        <section class="afspraak">
            <a href="{{ route('afspraak') }}">AFSPRAAK MAKEN</a>
        </section>

        <main>
            <section class="visie">
                <h3>VISIE</h3>
                <p>Mijn naam is Gerda Eggermont en ik ben gepassioneerd om mensen te helpen. 
                    Hierbij geloof ik in de totaalbehandeling en een individuele benadering. 
                    Samen met de patiënt ga ik diepgaand en holistisch op zoek naar de oorzaak van de klachten. 
                    Het doel is steeds om het evenwicht, zowel mentaal als fysiek, te herstellen, en zo op lange termijn goede resultaten te boeken. 
                    Ik doe daarnaast zo veel mogelijk beroep op de eigen krachten van het individu, om het evenwicht duurzamer te maken.</p>
            </section>
            <figure class="mobile">
                <img src="images/gerda_prahoge.webp" id="foto" alt="PRAHOGE praktijk voor holistische geneeskunde Dr. Gerda Eggermont in Gent" title="PRAHOGE praktijk voor holistische geneeskunde - Dr. Gerda Eggermont">
            </figure>
            <section class="opleidingen">
                <h3>OPLEIDINGEN</h3>
                <p>Klassiek geschoold huisarts met brede complementaire opleidingen</p>
                <ul>
                    <li>Algemene geneeskunde, KU Leuven</li>
                    <li>Volksgezondheid en Milieu, Universiteit Gent</li>
                    <li>Orthomoleculaire geneeskunde, VIOW</li>
                    <li>Homeopathie, Unda, Boiron</li>
                    <li>Medisch afslanken en medisch voedingsadvies, Fitness als medicijn</li>
                    <li>Sportgeneeskunde : mesotherapie, biopunctuur, cupping, neuraal-pijntherapie,  PRP (bloedplaatjestherapie)</li>
                    <li>Erkend acupuncturist, JING MING</li>
                    <li>Erkend tabakoloog, KULeuven</li>
                    <li>Erkend en geaccrediteerd  in de huisartsgeneeskunde,  KU Leuven</li>
                </ul>
            </section>
            <section class="betekenen">
                <h3>WAT KAN IK VOOR U BETEKENEN?</h3>
                <p>Als holistisch zelfstandig arts begeleid ik al 22 jaar mensen met</p>
                <ul>
                    <li><span class="vet">Individueel bewegings- en voedingsadvies</span> (mede via labonderzoek)</li>
                    <li><span class="vet">Sportletsels</span> (tenniselleboog, achillespeesontsteking)</li>
                    <li><span class="vet">Chronische peesontstekingen, hielspoor, spierpijn</span></li>
                    <li><span class="vet">Nek- en schouderklachten</span> (spierontsteking, artrose, spierblokkade)</li>
                    <li><span class="vet">Knie- en lage rugklachten</span></li>
                    <li><span class="vet">Maag-darmklachten, spijsverteringsklachten, intoleranties</span></li>
                    <li><span class="vet">Burn-out klachten, slaapproblemen en vermoeidheid</span></li>
                    <li><span class="vet">Gewichtsproblemen</span></li>
                    <li><span class="vet">Menopauzeklachten</span></li>
                    <li><span class="vet">Auto-immuunziekten</span> (huid-, darm- en schildklierklachten)</li>
                    <li><span class="vet">Fertiliteitsproblemen</span></li>
                </ul>
                <p>Dankzij een goede samenwerking met collega-artsen, radiologen, klinisch biologen, kinesisten, osteopaten, chiropractors, psychologen en verpleegkundigen, begeleidt en help ik mijn patiënten op holistische wijze, dat wil zeggen: individuele oorzaken wegnemen, en herval voorkomen. Welkom!</p>
            </section>
        </main>
        <figure class="desktop">
            <img src="images/gerda_prahoge.webp" id="foto" alt="PRAHOGE praktijk voor holistische geneeskunde Dr. Gerda Eggermont in Gent" title="PRAHOGE praktijk voor holistische geneeskunde - Dr. Gerda Eggermont">
        </figure>
        @include('_partials.footer')
    </div>

</body>
</html>