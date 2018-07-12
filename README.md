####Welk design pattern is gekozen?
Abstract Factory Pattern

####Wat zijn de kenmerken (toegevoegde waarde) van dit design pattern?
De ‘Abstract Factory Pattern’ werkt door middel van een super-factory, die andere factories aanmaakt. Hierdoor heb je meer vrijheid dan de ‘Factory Pattern’.

####Welke concept is bedacht om het pattern te kunnen toepassen?
We hebben als concept een Medabot generator bedacht. In ons concept hebben we twee typen Medabots, een Melee Medabot en een Ranged Medabot. Iedere Medabot heeft zijn eigen factory die gebruik maken van een contract/interface, dit is de super-factory. Daarnaast heeft iedere Medabot zijn eigen onderdelen die je via de factory inlaat.

####Wat zijn de responsibilities van de geïmplementeerde classes?
Dat iedere factory zijn eigen classes kan inladen. Iedere Medabot heeft zijn eigen onderdelen. 

####In welk opzicht wordt polymorfie bereikt?
De ‘MedabotFactory’ wordt onderverdeeld in ’RangedMedabotFactory’ en ‘MeleeMedabotFactory’. De Factories hebben allebei een ‘make’ method, maar er worden andere onderdelen ingeladen. Dus ze geven allebei andere waardes terug.
