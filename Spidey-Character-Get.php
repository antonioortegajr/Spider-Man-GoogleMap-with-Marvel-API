<?php

$file ='Spider-Man_locations.kml';
//beginning of endpoint. change if needed
$gate = 'http://gateway.marvel.com/v1/public/';
//Parameters change as you see fit. I picked characters and Spidey
$param = "characters?name=Spider-Man";
//replace with your key from developers.marvel
$APIKey ='YOURKEY123';
//replace with your private key from developers.marvel
$PrivateKey = 'YOURPRIVATEKEY123';
// just used an integer for this example
$timestamp = '1';
//create hash
$hash = md5($timestamp . $PrivateKey . $APIKey);
//build endpoint
$ch = curl_init($gate . $param . "&ts=" . $timestamp . "&apikey=" . $APIKey . "&hash=" . $hash);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HEADER, true );
$data = curl_exec($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);
//dump the reposnse. should look like the docs at developers.marvel
var_dump(
$data,
json_encode($data)
);

//data for map

$map_kml = "<?xml version='1.0' encoding='UTF-8'?>
<kml xmlns='http://www.opengis.net/kml/2.2'>
<Document>
<name>Spider-Man locations</name>
<description><![CDATA[Places of interest in the life of The Amazing Spider-Man. Locations are based on Marvel.com when able. Others are from a map in the “Official Handbook to the Marvel Universe”. Plenty of help from SpiderFan.org and SpiderVillain.com. Some are based on their mention in various Spidey titles.

Locations are speculation unless otherwise noted with an official address of some sort. Some may change with the addition of google earth into google maps. If you are even looking at this then you are most likely nerdy enough to know how to message me with any suggestions.
Or find me on twitter. http://twitter.com/antonioortegajr
This project will also be on github. https://github.com/antonioortegajr/Spider-Man-GoogleMap-with-Marvel-API

For timelines that I have made about Spidey history go to
http://www.timetoast.com/users/1986]]></description>
<Folder>
<name>Untitled layer</name>
<Placemark>
<styleUrl>#icon-959-DB4436</styleUrl>
<name>Brooklyn Bridge</name>
<ExtendedData>
<Data name='gx_media_links'>
<value>http://media.comicvine.com/uploads/0/2532/154726-4652-the-death-of-gwen-st_super.jpg</value>
</Data>
</ExtendedData>
<description><![CDATA[Death of Gwen Stacy, Peter Parker's first love, at the hands of the Green Goblin.

  Although in the Amazing Spider-Man it was named as the George Washington bridge. The artwork shows the Brooklyn bridge and the story has since been retold in the comics as the Brooklyn bridge.]]></description>
  <Point>
    <coordinates>-73.998477,40.70745,0.0</coordinates>
  </Point>
</Placemark>
<Placemark>
  <styleUrl>#icon-959-DB4436</styleUrl>
  <name>The Parker Residence</name>
  <ExtendedData>
    <Data name='gx_media_links'>
      <value>http://farm4.static.flickr.com/3278/3045070042_244f3c0b4d.jpg?v=0</value>
    </Data>
  </ExtendedData>
  <description><![CDATA[Aunt May's and Peter's home before it was destroyed, and now restored it is again in the new on going story of the comics.

    This place marker is on the location used in the Spider-Man movie.
    The comic location is still not certain.]]></description>
    <Point>
      <coordinates>-73.854947,40.70989,0.0</coordinates>
    </Point>
  </Placemark>
  <Placemark>
    <styleUrl>#icon-959-DB4436</styleUrl>
    <name>Daily Bugle</name>
    <ExtendedData>
      <Data name='gx_media_links'>
        <value>http://media.comicvine.com/uploads/0/40/349002-141953-daily-bugle_large.gif</value>
      </Data>
    </ExtendedData>
    <description><![CDATA[The New York news paper that is J. Jonah Jameson's baby and Perter Parkers place of employment for years. Recently sold out from under J.J. now known as the DB.]]></description>
    <Point>
      <coordinates>-73.973485,40.74770000000001,0.0</coordinates>
    </Point>
  </Placemark>
  <Placemark>
    <styleUrl>#icon-959-DB4436</styleUrl>
    <name>City Hall New York, New York</name>
    <ExtendedData>
      <Data name='gx_media_links'>
        <value>http://www.jimkeefe.com/studio/romita/romita.art/wedding.gif</value>
      </Data>
    </ExtendedData>
    <description><![CDATA[Peter Parker finally ties the know with Mary Jane here at city hall. Making him the happiest and luckiest wall crawler in the world. It also opened a new avenue for villains  to strike at Peter. While Spider-Man's fame and life have often gotten in the way, MJ has had her share of non-Spidey related problems. All and all they have taken on each others problems and made their marriage work. Though recently the marriage is undone by Miphisto, nobody believes that these two can be kept apart.]]></description>
    <Point>
      <coordinates>-74.006063,40.712736,0.0</coordinates>
    </Point>
  </Placemark>
  <Placemark>
    <styleUrl>#icon-959-DB4436</styleUrl>
    <name>Mary Jane's Apartment</name>
    <ExtendedData>
    </ExtendedData>
    <description><![CDATA[Before being a Spidey spouse MJ lived a dancing party girl lifestyle in between her acting and modeling gigs]]></description>
    <Point>
      <coordinates>-73.979943,40.784352,0.0</coordinates>
    </Point>
  </Placemark>
  <Placemark>
    <styleUrl>#icon-959-DB4436</styleUrl>
    <name>Baxter Building</name>
    <ExtendedData>
      <Data name='gx_media_links'>
        <value>http://i121.photobucket.com/albums/o210/davidthearchangel/Baxter_Building.gif</value>
      </Data>
    </ExtendedData>
    <description><![CDATA[Home to the Fantastic Four, Spider-Man has been a guest in this location many times over the years. Notably when he asked Dr. Reed Richards for help in the removal and containment of the alien symbiote that tried to take him over. This building has been destroyed and rebuilt many times over like many super hero homes.]]></description>
    <Point>
      <coordinates>-73.978801,40.752881,0.0</coordinates>
    </Point>
  </Placemark>
  <Placemark>
    <styleUrl>#icon-959-DB4436</styleUrl>
    <name>Spider-Man dumps clones body in smoke stack</name>
    <ExtendedData>
    </ExtendedData>
    <description><![CDATA[After fighting a clone of himself created by the Jackel. Spider-Man dumps the seeming deceased body in a smoke stack to protect his secret identity.

      While the address of the stack is unknown these stacks fit the bill pretty well. In appearance and location.]]></description>
      <Point>
        <coordinates>-73.980392,40.705322,0.0</coordinates>
      </Point>
    </Placemark>
    <Placemark>
      <styleUrl>#icon-959-DB4436</styleUrl>
      <name>J. Jonah's Penthouse</name>
      <ExtendedData>
        <Data name='gx_media_links'>
          <value>http://www.the-isb.com/images/SpideyPopquiz03.jpg</value>
        </Data>
      </ExtendedData>
      <description><![CDATA[Jolly J. Jonah's home away from the Daily Bugle.]]></description>
      <Point>
        <coordinates>-73.959757,40.774038,0.0</coordinates>
      </Point>
    </Placemark>
    <Placemark>
      <styleUrl>#icon-959-DB4436</styleUrl>
      <name>Empire State Universty</name>
      <ExtendedData>
        <Data name='gx_media_links'>
          <value>http://images1.wikia.nocookie.net/marveldatabase/images/thumb/f/f7/ESU1.jpg/616px-ESU1.jpg</value>
        </Data>
      </ExtendedData>
      <description><![CDATA[Peter attended Empire State University on a science scholarship. His currently a graduate (biophysics major), doctorate studies in biochemistry (incomplete). Always having trouble with splitting his school work with his Spider-Man duties. Here he meets and falls in love with Gwen Stacy. Harry Osborn, Flash Thomson, and Mary Jane all go here while Pete is enrolled. Dr. Curt Conners is a Professor at this school. As is Dr. Miles Warren(later the Jackel) was a biochemistry professor. Other notable alumni include Reed Richards (later Mister Fantastic), Ben Grimm (later the Thing),Victor Von Doom (later Doctor Doom), Johnny Storm (later the Human Torch), and even Emma Frost have gone to this school.]]></description>
      <Point>
        <coordinates>-73.988666,40.727551,0.0</coordinates>
      </Point>
    </Placemark>
    <Placemark>
      <styleUrl>#icon-959-DB4436</styleUrl>
      <name>Docor Stange's Sactum Sactorium</name>
      <ExtendedData>
        <Data name='gx_media_links'>
          <value>http://www.marvel.com/universe3zx/images/thumb/d/d8/SanctumSanctorum.jpg/440px-SanctumSanctorum.jpg</value>
        </Data>
      </ExtendedData>
      <description><![CDATA[Home to Dr. Stephen Vincent Strange(Doctor Strange) and his faithful bodyguard and manservant Wong. Spider-Man often visits the Doctor for help when battling those with magic powers. Very recently Spidey asked for help with a near death Aunt May.]]></description>
      <Point>
        <coordinates>-74.000773,40.729117,0.0</coordinates>
      </Point>
    </Placemark>
    <Placemark>
      <styleUrl>#icon-959-DB4436</styleUrl>
      <name>Peter's Chelsea Apartment</name>
      <ExtendedData>
        <Data name='gx_media_links'>
          <value>http://images2.wikia.nocookie.net/marveldatabase/images/6/67/410_Chelsea_Street.jpg</value>
        </Data>
      </ExtendedData>
      <description><![CDATA[Listed as 410 Chelsea, Pete's place. Growing up and living on his own. A great pad for the young Pete. Before marrying MJ,  Pete lived the single web swing in and out lifestyle. They both move in later until Mary Jane uses her super-model money to get them a condo.]]></description>
      <Point>
        <coordinates>-74.000137,40.744102,0.0</coordinates>
      </Point>
    </Placemark>
    <Placemark>
      <styleUrl>#icon-959-DB4436</styleUrl>
      <name>Old Avenger's Masion</name>
      <ExtendedData>
        <Data name='gx_media_links'>
          <value>http://vu.morrissey-solo.com/moz/perez/jla-a/mansion1.jpg</value>
        </Data>
      </ExtendedData>
      <description><![CDATA[Before being destroyed the Avenger's mansion was located here. Spider-Man being an honorary Avenger didn't live here but would come by for help on occasion.]]></description>
      <Point>
        <coordinates>-73.967755,40.771178,0.0</coordinates>
      </Point>
    </Placemark>
    <Placemark>
      <styleUrl>#icon-959-DB4436</styleUrl>
      <name>The Coffee Bean</name>
      <ExtendedData>
        <Data name='gx_media_links'>
          <value>http://www.spidermancrawlspace.com/wordpress/wp-content/uploads/2009/05/91.jpg</value>
        </Data>
      </ExtendedData>
      <description><![CDATA[Long time hang out for the gang at Empire State University.]]></description>
      <Point>
        <coordinates>-73.987075,40.725379,0.0</coordinates>
      </Point>
    </Placemark>
    <Placemark>
      <styleUrl>#icon-959-DB4436</styleUrl>
      <name>Stark Tower</name>
      <ExtendedData>
        <Data name='gx_media_links'>
          <value>http://www.marvel.com/universe3zx/images/thumb/4/4f/Strktwr.jpg/440px-Strktwr.jpg</value>
        </Data>
      </ExtendedData>
      <description><![CDATA[Built by Tony Stark after the destruction of the Avengers mansion, Stark Towers is the new home of the Avengers, and for a brief time the entire Parker family.]]></description>
      <Point>
        <coordinates>-73.974166,40.75922,0.0</coordinates>
      </Point>
    </Placemark>
    <Placemark>
      <styleUrl>#icon-959-DB4436</styleUrl>
      <name>Fisk Towers</name>
      <ExtendedData>
        <Data name='gx_media_links'>
          <value>http://images3.wikia.nocookie.net/marveldatabase/images/thumb/2/20/Fisk_Tower.jpg/200px-Fisk_Tower.jpg</value>
        </Data>
      </ExtendedData>
      <description><![CDATA[The Kingpin of crime runs all of the city's organized crime through his offices. This has been the scene of many a battle for Spider-Man.]]></description>
      <Point>
        <coordinates>-73.982534,40.751012,0.0</coordinates>
      </Point>
    </Placemark>
    <Placemark>
      <styleUrl>#icon-959-DB4436</styleUrl>
      <name>Empire State Building</name>
      <ExtendedData>
      </ExtendedData>
      <description><![CDATA[While this famous landmark has been the location for many of  Spidey's battles, it was at the top with his Aunt May telling Peter that she had known for years that he was Spider-Man that was the biggest event.]]></description>
      <Point>
        <coordinates>-73.985442,40.748468,0.0</coordinates>
      </Point>
    </Placemark>
    <Placemark>
      <styleUrl>#icon-959-DB4436</styleUrl>
      <name>Pittsburg International Airport.</name>
      <ExtendedData>
      </ExtendedData>
      <description><![CDATA[After helping MJ clear up some family troubles, she comes to terms with some of her issues telling Peter she has grown up and accepts Peter's marriage proposal.]]></description>
      <Point>
        <coordinates>-80.257037,40.496423,0.0</coordinates>
      </Point>
    </Placemark>
    <Placemark>
      <styleUrl>#icon-959-DB4436</styleUrl>
      <name>Statue Of Liberty</name>
      <ExtendedData>
        <Data name='gx_media_links'>
          <value>http://images3.wikia.nocookie.net/marveldatabase/images/thumb/0/0a/Spider_Man_Human_Torch_1_2005.jpg/77px-Spider_Man_Human_Torch_1_2005.jpg</value>
        </Data>
      </ExtendedData>
      <description><![CDATA[Lady liberty has become the normal meeting place for Spider-Man and one his most frequent crime fighting partners, the Human Torch.]]></description>
      <Point>
        <coordinates>-74.044665,40.688978,0.0</coordinates>
      </Point>
    </Placemark>
    <Placemark>
      <styleUrl>#icon-959-DB4436</styleUrl>
      <name>Shea Stadium</name>
      <ExtendedData>
        <Data name='gx_media_links'>
          <value>http://img5.imageshack.us/img5/6651/149hlu.jpg</value>
        </Data>
      </ExtendedData>
      <description><![CDATA[Here Peter meets and fights his clone for the first time. Although he had met Gwen Stacy's clone before this, it's this location where all the crazy clone drama in his life really gets kicked off. Also Peter attended many Mets games here, as he has long been a fan.]]></description>
      <Point>
        <coordinates>-73.846997,40.755994,0.0</coordinates>
      </Point>
    </Placemark>
    <Placemark>
      <styleUrl>#icon-959-DB4436</styleUrl>
      <name>Raft Prison</name>
      <ExtendedData>
        <Data name='gx_media_links'>
          <value>http://www.marvel.com/universe3zx/images/1/10/Raft.jpg</value>
        </Data>
      </ExtendedData>
      <description><![CDATA[A supervillain prison that seems to have break outs often.]]></description>
      <Point>
        <coordinates>-73.897905,40.795805,0.0</coordinates>
      </Point>
    </Placemark>
    <Placemark>
      <styleUrl>#icon-959-DB4436</styleUrl>
      <name>Rykers Island</name>
      <ExtendedData>
      </ExtendedData>
      <description><![CDATA[Spelled with a Y in the Marvel universe. Rykers prison has been temporary home to many people important to Spidey. Including Venom, Carnage, and the Kingpin just to name a few.]]></description>
      <Point>
        <coordinates>-73.88252,40.791443,0.0</coordinates>
      </Point>
    </Placemark>
    <Placemark>
      <styleUrl>#icon-959-DB4436</styleUrl>
      <name>Roosevelt Island</name>
      <ExtendedData>
        <Data name='gx_media_links'>
          <value>http://images1.wikia.nocookie.net/marveldatabase/images/2/23/AmazingSpider-Man328.jpg</value>
        </Data>
      </ExtendedData>
      <description><![CDATA[When Spidey is endowed with comsic powers he starts fighting some very heavy hitters in the marvel universe. At this location his new powers allow him to defeat even the Hulk, showing just how much more powerful he had become. Those cosmic powers left him after he defeats the Tri-Sentinal.]]></description>
      <Point>
        <coordinates>-73.959736,40.751638,0.0</coordinates>
      </Point>
    </Placemark>
    <Placemark>
      <styleUrl>#icon-959-DB4436</styleUrl>
      <name>Time Square</name>
      <ExtendedData>
      </ExtendedData>
      <description><![CDATA[Like most New York landmarks Spider-Man has had a lot happen here. But umasking during a press conference for the super-hero registration act(Civil War story) could've been the biggest.]]></description>
      <Point>
        <coordinates>-73.986448,40.756327,0.0</coordinates>
      </Point>
    </Placemark>
    <Placemark>
      <styleUrl>#icon-959-DB4436</styleUrl>
      <name>Portland</name>
      <ExtendedData>
      </ExtendedData>
      <description><![CDATA[Spider-Man fights a foe named Tendril here at the the Steel Bridge. After moving out to Portland to lead a normal life, the Parkers find that is just not going to happen for them. Even when Spidey has his clone Ben taking care of New York and MJ with child, Peter can never stop finding himself in the Spider-Man role.]]></description>
      <Point>
        <coordinates>-122.66810400000001,45.527998,0.0</coordinates>
      </Point>
    </Placemark>
    <Placemark>
      <styleUrl>#icon-959-DB4436</styleUrl>
      <name>Hope B.C.</name>
      <ExtendedData>
        <Data name='gx_media_links'>
          <value>http://www.leaderslair.com/spider-man/spider-man/spider-man10.jpg</value>
        </Data>
      </ExtendedData>
      <description><![CDATA[Teaming up here with Wolverine, Spidey clears the name of a beast of legend. The Wendigo, who is wrongly accused of murdering children. Out of his element in the forest and very disturbed by the brutal child killings, Spider-Man shows again that being a hero and living up to his great responsibility is part of who he is, no matter what the location. With a little help from Wolverine.]]></description>
      <Point>
        <coordinates>-121.403475,49.363036,0.0</coordinates>
      </Point>
    </Placemark>
    <Placemark>
      <styleUrl>#icon-959-DB4436</styleUrl>
      <name>Desert New Mexico</name>
      <ExtendedData>
        <Data name='gx_media_links'>
          <value>http://upload.wikimedia.org/wikipedia/en/6/6a/14-1goblin.jpg</value>
        </Data>
      </ExtendedData>
      <description><![CDATA[This location is the first place Spider-Man meets his lifetime enemy the Green Goblin. Lured to Hollywood under the pretense of shooting a movie, then sent to the shooting local. Spider-Man must fight a cranky Hulk that was hiding in a cave near by. The local had caves and a spring. I googled movie locals in New Mexico and this is a popular one that fits the description. I will leave it here until I find a better place.]]></description>
      <Point>
        <coordinates>-106.900063,35.993147,0.0</coordinates>
      </Point>
    </Placemark>
    <Placemark>
      <styleUrl>#icon-959-DB4436</styleUrl>
      <name>Notre Dame</name>
      <ExtendedData>
      </ExtendedData>
      <description><![CDATA[Maybe not the most important time that Spider-Man saved J. Jonah Jameson. But the fact that Spidey went all the way to Paris to do so shows how obvious clues to secret identities are lost on most people in comics. Also after traveling all that way just to save him, Jonah can still find a way to hate Spider-Man. A loathing that will always exist for Spidey.]]></description>
      <Point>
        <coordinates>2.34969,48.85305,0.0</coordinates>
      </Point>
    </Placemark>
    <Placemark>
      <styleUrl>#icon-959-DB4436</styleUrl>
      <name>George Washinton Bridge</name>
      <ExtendedData>
      </ExtendedData>
      <description><![CDATA[Spidey meets a Spider-Man from the year 2211. A fight with a Goblin from that year takes place and Spider-Man has time traveling Spider-Men problems to add to the normal cloned Spider-Men problems.]]></description>
      <Point>
        <coordinates>-73.948288,40.850858,0.0</coordinates>
      </Point>
    </Placemark>
    <Placemark>
      <styleUrl>#icon-959-DB4436</styleUrl>
      <name>Coney Island</name>
      <ExtendedData>
        <Data name='gx_media_links'>
          <value>http://www.spiderfan.org/comics/images/spiderman_amazing/012.jpg</value>
        </Data>
      </ExtendedData>
      <description><![CDATA[Spidey got unmasked here by Doc Ock. He had a cold at the time and fought poorly. So poorly, that when unmasked the Dr., he refused to believe it to be the real Spider-Man. A good example of how Spider-Man has real problems like a cold.  Also a good example of how hard it can be to have your secret identity revealed.

        Also Uncle Ben used to work here when he dated Aunt May..]]></description>
        <Point>
          <coordinates>-73.979069,40.573972000000005,0.0</coordinates>
        </Point>
      </Placemark>
      <Placemark>
        <styleUrl>#icon-959-DB4436</styleUrl>
        <name>Berlin</name>
        <ExtendedData>
          <Data name='gx_media_links'>
            <value>http://media.comicvine.com/uploads/0/574/91268-17536-ned-leeds_large.jpg</value>
          </Data>
        </ExtendedData>
        <description><![CDATA[Ned Leeds is killed here while on assignment for the Bugle with Peter. He is discovered to be the Hobgoblin. His death is another in a long list of people close to Peter to get caught up in the super powered villain and normal person struggle that overlaps in Spider-Man's life.]]></description>
        <Point>
          <coordinates>13.411582,52.524185,0.0</coordinates>
        </Point>
      </Placemark>
      <Placemark>
        <styleUrl>#icon-959-DB4436</styleUrl>
        <name>J.F.K International</name>
        <ExtendedData>
        </ExtendedData>
        <description><![CDATA[Peter and Mary Jane have their first kiss shown in the comics.(I think, still double checking on that) Even with the then sightings of his first love Gwen Stacy(clone) messing with Peter's head, his true feelings for MJ are shown.]]></description>
        <Point>
          <coordinates>-73.782914,40.643543,0.0</coordinates>
        </Point>
      </Placemark>
      <Placemark>
        <styleUrl>#icon-959-DB4436</styleUrl>
        <name>Gym on Broadway and Canal</name>
        <ExtendedData>
        </ExtendedData>
        <description><![CDATA[After unmasking himself during the super hero civil war, Spider-Man finally has it out with J. Jonah Jameson. Inviting J.J.J. to a gym, Peter gets a chance to tell him off and say all the things he hasn't been able to over the years. The latest in the Spidey story has all of this erased from history but at least once, Pete got to say his piece.]]></description>
        <Point>
          <coordinates>-74.001693,40.719409,0.0</coordinates>
        </Point>
      </Placemark>
      <Placemark>
        <styleUrl>#icon-959-DB4436</styleUrl>
        <name>Central Park</name>
        <ExtendedData>
        </ExtendedData>
        <description><![CDATA[The setting of many events in Peter's and Spidey's life. Everything from near death battles, to family outings, to coming back from an alien world covered in a evil symbiote.]]></description>
        <Point>
          <coordinates>-73.969831,40.776349,0.0</coordinates>
        </Point>
      </Placemark>
      <Placemark>
        <styleUrl>#icon-959-DB4436</styleUrl>
        <name>Savage Land</name>
        <ExtendedData>
          <Data name='gx_media_links'>
            <value>http://prettythings.pullbot.com/artworks/8667/mvlffV1_medium.jpg</value>
          </Data>
        </ExtendedData>
        <description><![CDATA[Given at Marvel.com as 69º 30’ S, 68º 30’ W, the Savage Land is a pocket of land untouched by time and the general goings on of the rest of the Earth. It's still teaming with Dinos and super beings. Here as one of the New Avengers Spidey helps protect the Savage Land and continues to be a major force as a  Marvel hero. Not bad for a guy that can't always pay his rent.]]></description>
        <Point>
          <coordinates>-66.401367,-68.91891,0.0</coordinates>
        </Point>
      </Placemark>
      <Placemark>
        <styleUrl>#icon-959-DB4436</styleUrl>
        <name>Latveria</name>
        <ExtendedData>
          <Data name='gx_media_links'>
            <value>http://marvel.com/universe3zx/images/c/c1/Latveria.jpg</value>
          </Data>
        </ExtendedData>
        <description><![CDATA[Latveria is located between the nations of Hungary, Serbia, and Romania. It also borders Symkaria, home of Silver Sable. Surrounded by the Carpathians to the north and the Malhela range to the south, Latveria is under the strict control of Victor VonDoom. Spidey has visited Latveria on several occasions. To find Mary-Jane when she was missing, and as part of a secret operation so secret he didn't even know he was a part of it, and once even to joyride in the only working time machine in existence.]]></description>
        <Point>
          <coordinates>22.587891,47.144897,0.0</coordinates>
        </Point>
      </Placemark>
      <Placemark>
        <styleUrl>#icon-959-DB4436</styleUrl>
        <name>Disneyland</name>
        <ExtendedData>
        </ExtendedData>
        <description><![CDATA[Peter has been to L.A. more than a few times. From coming out to meet about a Spider-Man movie, to trying to win back Mary Jane while she was making a movie, to promoting a book on Spider-Man called Webs. Seems even though the name Spider-Man could really sell, Peter just can't ever cash in. But does use the book deal to talk MJ into a visit to Disneyland.]]></description>
        <Point>
          <coordinates>-117.918974,33.812119,0.0</coordinates>
        </Point>
      </Placemark>
      <Placemark>
        <styleUrl>#icon-959-DB4436</styleUrl>
        <name>Cleveland</name>
        <ExtendedData>
        </ExtendedData>
        <description><![CDATA[Despite their friendly rivalry DC comics paved the way for many of the Marvel comics to come. While in Cleveland on his book tour for Webs a coffee table book of Spider-Man photos from the bugle, Mary Jane buys an Action comic with Supergirl on the cover for Peter. This event took place during the 50th anniversary of Superman. The cover of this comic also was Spidey lifting a car to save some people, an homage to Action Comics #1 first appearance of Superman.]]></description>
        <Point>
          <coordinates>-81.690302,41.504721,0.0</coordinates>
        </Point>
      </Placemark>
      <Placemark>
        <styleUrl>#icon-959-DB4436</styleUrl>
        <name>Lady Of Our Saints Church</name>
        <ExtendedData>
        </ExtendedData>
        <description><![CDATA[The Lady Of Our Saints Church is the location where Peter breaks free of the alien symbiote as Eddie Brock is praying and about to commit suicide. They join and they are Venom.

          I am putting the Lady Of Our Saints Church here on the Church of Our Lady of the Rosary, seems to fit the bill. Has a bell tower kinda looks like the church and is in Spidey's stomping grounds.]]></description>
          <Point>
            <coordinates>-74.013779,40.702539,0.0</coordinates>
          </Point>
        </Placemark>
        <Placemark>
          <styleUrl>#icon-959-DB4436</styleUrl>
          <name>Penn Station</name>
          <ExtendedData>
          </ExtendedData>
          <description><![CDATA[It's at Penn Station that Aunt May tells Peter that she is planning to move in with Anna Watson(Mary Jane's aunt). This is the when Peter first gets the chance to be Spider-Man and not have to be the only super hero that has to be in before curfew. He will relinquish this liberty when he dates and upon marriage.

            Also in at the time of this comic's printing, Penn Station was only recently completed.]]></description>
            <Point>
              <coordinates>-73.992134,40.749742,0.0</coordinates>
            </Point>
          </Placemark>
          <Placemark>
            <styleUrl>#icon-959-DB4436</styleUrl>
            <name>Unknown constuction site</name>
            <ExtendedData>
              <Data name='gx_media_links'>
                <value>http://i6.photobucket.com/albums/y240/SnarkFree/ChaosAtTheConstructionSite.gif</value>
              </Data>
            </ExtendedData>
            <description><![CDATA[Take your pick of Spider-Man battles that happen at construction site. With very few people and plenty of stuff to throw, trick into, or use in some kind of ploy. These random sites in New York are a favorite for some Spidey skirmishes.

              At the time of this posting this is a construction site. I will move or change the location of this if and when Google Maps updates and they have built something here.]]></description>
              <Point>
                <coordinates>-73.990967,40.724494,0.0</coordinates>
              </Point>
            </Placemark>
            <Placemark>
              <styleUrl>#icon-959-DB4436</styleUrl>
              <name>Rockefeller Plaza</name>
              <ExtendedData>
              </ExtendedData>
              <description><![CDATA[One of the last times J. Jonah Jameson commissions and mans a mechanical Spider Slayer, only to be defeated here and cause some expensive damage to the statue by the ice rink. Although just a huge wast of money over the years J.J.J. has paid for several Spider Slayers. J. Jonah has seemed to learn his lesson here and quit this habit.]]></description>
              <Point>
                <coordinates>-73.978334,40.758599,0.0</coordinates>
              </Point>
            </Placemark>
            <Placemark>
              <styleUrl>#icon-959-DB4436</styleUrl>
              <name>Symkaria</name>
              <ExtendedData>
                <Data name='gx_media_links'>
                  <value>http://1.bp.blogspot.com/_FSXtJ8MxjUg/SLQnL8QzJOI/AAAAAAAAA9Q/76abDzAFqig/s320/Symkaria.jpg</value>
                </Data>
              </ExtendedData>
              <description><![CDATA[Only existing in the Marvel universe The country of Symkaria is home to the Silver Sable. The leader of a for hire group called the Wild Pack. Spidey has helped out the Sable for purely noble reasons. Other times when in need of cash for rent or emergency.]]></description>
              <Point>
                <coordinates>20.114594,45.571755,0.0</coordinates>
              </Point>
            </Placemark>
            <Placemark>
              <styleUrl>#icon-959-DB4436</styleUrl>
              <name>Heathrow Airport</name>
              <ExtendedData>
              </ExtendedData>
              <description><![CDATA[On assignment for the Daily Bugle, Peter and Joy Mercado get caught up in a IRA attack that Peter must foil with out the Spider-Man outfit as not to cause people to wonder why Pete and Spidey are there at the same time.

                At this time the conflict would have been in the world news and Spider-Man comics have a history of reflecting some of the problems at the time. From taking on drugs in the seventies to this story about a fictionalized conflict based on real events.]]></description>
                <Point>
                  <coordinates>-0.42237300000000005,51.46962200000001,0.0</coordinates>
                </Point>
              </Placemark>
              <Placemark>
                <styleUrl>#icon-959-DB4436</styleUrl>
                <name>Flordia Everglades</name>
                <ExtendedData>
                  <Data name='gx_media_links'>
                    <value>http://i164.photobucket.com/albums/u6/crocsrock/Lizard_bio.jpg</value>
                  </Data>
                </ExtendedData>
                <description><![CDATA[Here Spider-Man must fight his friend Dr. Curt Conners after being transformed into the Lizard. Never able to fully fight him as any injury to the Lizard will be an injury to Dr. Conners, battles like these teach Spider-Man early on that he must use his intelligence more often than his spider powers.]]></description>
                <Point>
                  <coordinates>-80.92804,25.339061,0.0</coordinates>
                </Point>
              </Placemark>
              <Placemark>
                <styleUrl>#icon-959-DB4436</styleUrl>
                <name>Emporia</name>
                <ExtendedData>
                </ExtendedData>
                <description><![CDATA[Peter almost takes a job here for a company called On-Line Research as chief assistant. He decides to go back to school and stay in New York. He couldn't leave the big apple and Aunt May anyway. Imagine if the all the Spidey comics took place here.]]></description>
                <Point>
                  <coordinates>-96.17981,38.40585,0.0</coordinates>
                </Point>
              </Placemark>
              <Placemark>
                <styleUrl>#icon-959-DB4436</styleUrl>
                <name>Mount Sinai Hospital</name>
                <ExtendedData>
                </ExtendedData>
                <description><![CDATA[After suffering a heart attack induced by a angry Peter Parker, J. Jonah Jameson while trying to recover learns that his life's work the Daily Bugle has been sold out from under him by his wife. It is currently the DB and J. J. couldn't be less happy about it.]]></description>
                <Point>
                  <coordinates>-73.924902,40.768287,0.0</coordinates>
                </Point>
              </Placemark>
              <Placemark>
                <styleUrl>#icon-959-DB4436</styleUrl>
                <name>Some Crummy Canadian Island</name>
                <ExtendedData>
                  <Data name='gx_media_links'>
                    <value>http://www.spidervillain.com/SpiderManCovers/Amazing/ASM131/ASM131Cover.jpg</value>
                  </Data>
                </ExtendedData>
                <description><![CDATA[Referred to as such by Hammerhead, this island was to go to Aunt May as an inheritance. He and Doctor Octopus catch wind of this and the good doctor hatches a plan to marry old Aunt May. As the island has one of the richest supplies of uranium found in nature and there is already an airfield and one of the world's most sophisticated nuclear breeding reactors built on the site. For some reason, all unknown to the Parkers. Spidey foils the plot.]]></description>
                <Point>
                  <coordinates>-66.015472,43.406045,0.0</coordinates>
                </Point>
              </Placemark>
              <Placemark>
                <styleUrl>#icon-959-DB4436</styleUrl>
                <name>Wakanda</name>
                <ExtendedData>
                  <Data name='gx_media_links'>
                    <value>http://www.marvel.com/universe3zx/images/a/ab/Wakanda1.jpg</value>
                  </Data>
                </ExtendedData>
                <description><![CDATA[Only existing in the Marvel universe Wakanda is home to the largest deposit of Vibranium in the world and the birthplace of T'Challa(The Black Panther). In an effort to cure him of a life threating ailment, Spider-Man is one of the very few ever to be honored by the Wakandans and givin their heart-shaped herb that grants the person who consumes it enhanced strength, agility, and perception.]]></description>
                <Point>
                  <coordinates>37.924805,3.645,0.0</coordinates>
                </Point>
              </Placemark>
              <Placemark>
                <styleUrl>#icon-959-DB4436</styleUrl>
                <name>U.S. Capital Building</name>
                <ExtendedData>
                  <Data name='gx_media_links'>
                    <value>http://somethinglikearapper.files.wordpress.com/2009/01/2009-01-08-spideyobama12.jpg</value>
                  </Data>
                </ExtendedData>
                <description><![CDATA[On Jan. 20th Peter Parker is sent to cover the swearing in of President Obama. An imposter shows and After a quick change Spider-Man is there to sort everything out(it was the Cameleon) And even bump fists with Obama.]]></description>
                <Point>
                  <coordinates>-77.009944,38.889805,0.0</coordinates>
                </Point>
              </Placemark>
              <Placemark>
                <styleUrl>#icon-959-DB4436</styleUrl>
                <name>Xavier Institute For Higher Learning</name>
                <ExtendedData>
                  <Data name='gx_media_links'>
                    <value>http://4.bp.blogspot.com/_FSXtJ8MxjUg/SLQnMMDFbbI/AAAAAAAAA9o/GMBj-RuizLw/s1600/The-Xavier-Institute-for-Higher-Lea.jpg</value>
                  </Data>
                </ExtendedData>
                <description><![CDATA[1407 Graymalkin Lane, Salem Center, Westchester County is home to the X-Men. After being asked to join and declining, Spider-Man and the X-Men often work together. While not a mutant himself he does support their cause and will aid in it. Like wise he has visited the institute to ask for their help. Last I have read it was recently destroyed again after the Marvel Civil War.]]></description>
                <Point>
                  <coordinates>-73.598828,41.32897,0.0</coordinates>
                </Point>
              </Placemark>
              <Placemark>
                <styleUrl>#icon-959-DB4436</styleUrl>
                <name>Osborn Manor</name>
                <ExtendedData>
                </ExtendedData>
                <description><![CDATA[Listed in recent comics as on Columbus Circle and seemingly placed facing the sun rise I have placed the home of the Green Goblin here. Based on panels from the New Ways To Die story arc.]]></description>
                <Point>
                  <coordinates>-73.982336,40.768558,0.0</coordinates>
                </Point>
              </Placemark>
              <Placemark>
                <styleUrl>#icon-959-DB4436</styleUrl>
                <name>The Met</name>
                <ExtendedData>
                </ExtendedData>
                <description><![CDATA[Mary Jane is taken over by the spirit of Red Sonja and battles with Spider-Man.]]></description>
                <Point>
                  <coordinates>-73.963223,40.779298,0.0</coordinates>
                </Point>
              </Placemark>
              <Placemark>
                <styleUrl>#icon-959-DB4436</styleUrl>
                <name>Denver International Airport</name>
                <ExtendedData>
                </ExtendedData>
                <description><![CDATA[After a split between MJ and Peter he travels to L.A. to attempt to save their marriage. She decided to go to New York at the same time and they miss each other. On the return flights they cross paths in Denver International and have a important talk about their relationship. The talk is slightly interrupted by the appearance of Doctor Doom.]]></description>
                <Point>
                  <coordinates>-104.670181,39.864425,0.0</coordinates>
                </Point>
              </Placemark>
            </Folder>
            <Folder>
              <name>Untitled layer</name>
            </Folder>
            <Style id='icon-959-DB4436'>
              <IconStyle>
                <color>ff3644DB</color>
                <scale>1.1</scale>
                <Icon>
                  <href>images/s-pin.png</href>
                </Icon>
              </IconStyle>
            </Style>
          </Document>
        </kml>";


//update kml file for map

        file_put_contents($file, $map_kml);
        ?>
