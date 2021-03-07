 <h3>COMICS & GRAPHIC NOVELS</h3>
 <div id="comics-container">
   <ul>
     <li>THIS WEEK</li>
     <li>LAST WEEK</li>
     <li>NEXT WEEK</li>
     <li>UPCOMING</li>
     <li>SEE ALL</li>
   </ul>
   @foreach ($comics as $comic)
   <div class="comic">
     <a href=""><img src="{{ asset('storage/' . $comic->cover) }}" alt=""></a>
     <span class="title">{{$comic->title}}</span><br>
     <span class="availability">{{$comic->availability}} NOW</span>
   </div>
   @endforeach   
 </div>
 <h2>MUST READS</h2>
 <div id="most-reads">  
    <div class="read-card">
      <img src="{{ asset('img/reads_1.jpg') }}" alt="">
      <h6>GET THE INSIDE TRACK ON ALL THINGS DC</h6>
      <h5>DC CONNECT</h5>
      <p>The monthly, downloadable catalog of DC's comics, graphic novels, collectibles and more!</p>
    </div>
    <div class="read-card">
      <img src="{{ asset('img/reads_2.jpg') }}" alt="">
      <h6>FROM THE MIND OF NEIL GAIMAN</h6>
      <h5>THE SANDMAN UNIVERSE</h5>
      <p>Four new series set in the world of the Vertigo classic.</p>
    </div>
    <div class="read-card">
      <img src="{{ asset('img/reads_3.jpg') }}" alt="">
      <h6>THESE KIDS ARE ALL FIGHT!</h6>
      <h5>WONDER COMICS</h5>
      <p>Brian Michael Bendis shines the spotlight on DC’s youngest heroes!</p>
    </div>
 </div>