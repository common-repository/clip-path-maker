<div class="main">
        <header class="fade-content">
            <a href="">CSS clip-path maker</a>
            <a href="" id="getmeback">Back</a>
        </header>
        <div class="demo-container fade-content">
            <section class="demo">
                <div id="box" class="box" style="width: 300px; height: 300px;">
                    <div class="shadowboard"></div>
                    <div class="clipboard" style="clip-path: polygon(50% 0%, 0% 100%, 100% 100%);"></div>
                    <div class="handles">
                        <div class="handle" data-handle="0" style="top: 0px; left: 140px;">
                            <div class="delete-point"></div>
                        </div>
                        <div class="handle" data-handle="1" style="top: 280px; left: 0px;">
                            <div class="delete-point"></div>
                        </div>
                        <div class="handle" data-handle="2" style="top: 280px; left: 280px;">
                            <div class="delete-point"></div>
                        </div>
                    </div>
                </div>
                <div class="custom-notice">
                    <div>
                        <span class="touchy"></span> to add points<br>to
                        custom polygon.
                    </div>
                </div>
            </section>
        </div>
        <section class="dark-panel custom">
            <h2>Custom shape</h2>
            <button class="finish"></button>
        </section>
        <section class="dark-panel inset">
            <div class="flex">
                <h2>Round edges</h2>
                <input value="5% 20% 0 10%" class="inset-round" type="text">
            </div>
            <p>
                The <code>inset()</code> shape optionally allows values
                similar to <code>border-radius</code> for rounded edges.
                This new feature may be buggy in
                <span class="your-browser">your browser</span>.
            </p>
        </section>
        <section id="flickity" class="shapes horizontal gallery">
            <ul>
                <figure class="gallery-cell on" data-name="Triangle" data-type="polygon"
                    data-coords="50,0 0,100 100,100">
                    <div style="  clip-path: polygon(50% 0%, 0% 100%, 100% 100%)" class="shape Triangle"></div>
                    <figcaption>Triangle</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Trapezoid" data-type="polygon"
                    data-coords="20,0 80,0 100,100 0,100">
                    <div style="  clip-path: polygon(20% 0%, 80% 0%, 100% 100%, 0% 100%)" class="shape Trapezoid"></div>
                    <figcaption>Trapezoid</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Parallelogram" data-type="polygon"
                    data-coords="25,0 100,0 75,100 0,100">
                    <div style="  clip-path: polygon(25% 0%, 100% 0%, 75% 100%, 0% 100%)" class="shape Parallelogram">
                    </div>
                    <figcaption>Parallelogram</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Rhombus" data-type="polygon"
                    data-coords="50,0 100,50 50,100 0,50">
                    <div style="  clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%)" class="shape Rhombus"></div>
                    <figcaption>Rhombus</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Pentagon" data-type="polygon"
                    data-coords="50,0 100,38 82,100 18,100 0,38">
                    <div style="  clip-path: polygon(50% 0%, 100% 38%, 82% 100%, 18% 100%, 0% 38%)"
                        class="shape Pentagon"></div>
                    <figcaption>Pentagon</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Hexagon" data-type="polygon"
                    data-coords="25,0 75,0 100,50 75,100 25,100 0,50">
                    <div style="  clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%)"
                        class="shape Hexagon"></div>
                    <figcaption>Hexagon</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Heptagon" data-type="polygon"
                    data-coords="50,0 90,20 100,60 75,100 25,100 0,60 10,20">
                    <div style="  clip-path: polygon(50% 0%, 90% 20%, 100% 60%, 75% 100%, 25% 100%, 0% 60%, 10% 20%)"
                        class="shape Heptagon"></div>
                    <figcaption>Heptagon</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Octagon" data-type="polygon"
                    data-coords="30,0 70,0 100,30 100,70 70,100 30,100 0,70 0,30">
                    <div style="  clip-path: polygon(30% 0%, 70% 0%, 100% 30%, 100% 70%, 70% 100%, 30% 100%, 0% 70%, 0% 30%)"
                        class="shape Octagon"></div>
                    <figcaption>Octagon</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Nonagon" data-type="polygon"
                    data-coords="50,0 83,12 100,43 94,78 68,100 32,100 6,78 0,43 17,12">
                    <div style="  clip-path: polygon(50% 0%, 83% 12%, 100% 43%, 94% 78%, 68% 100%, 32% 100%, 6% 78%, 0% 43%, 17% 12%)"
                        class="shape Nonagon"></div>
                    <figcaption>Nonagon</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Decagon" data-type="polygon"
                    data-coords="50,0 80,10 100,35 100,70 80,90 50,100 20,90 0,70 0,35 20,10">
                    <div style="  clip-path: polygon(50% 0%, 80% 10%, 100% 35%, 100% 70%, 80% 90%, 50% 100%, 20% 90%, 0% 70%, 0% 35%, 20% 10%)"
                        class="shape Decagon"></div>
                    <figcaption>Decagon</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Bevel" data-type="polygon"
                    data-coords="20,0 80,0 100,20 100,80 80,100 20,100 0,80 0,20">
                    <div style="  clip-path: polygon(20% 0%, 80% 0%, 100% 20%, 100% 80%, 80% 100%, 20% 100%, 0% 80%, 0% 20%)"
                        class="shape Bevel"></div>
                    <figcaption>Bevel</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Rabbet" data-type="polygon"
                    data-coords="0,15 15,15 15,0 85,0 85,15 100,15 100,85 85,85 85,100 15,100 15,85 0,85">
                    <div style="  clip-path: polygon(0% 15%, 15% 15%, 15% 0%, 85% 0%, 85% 15%, 100% 15%, 100% 85%, 85% 85%, 85% 100%, 15% 100%, 15% 85%, 0% 85%)"
                        class="shape Rabbet"></div>
                    <figcaption>Rabbet</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Left arrow" data-type="polygon"
                    data-coords="40,0 40,20 100,20 100,80 40,80 40,100 0,50">
                    <div style="  clip-path: polygon(40% 0%, 40% 20%, 100% 20%, 100% 80%, 40% 80%, 40% 100%, 0% 50%)"
                        class="shape Left arrow"></div>
                    <figcaption>Left arrow</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Right arrow" data-type="polygon"
                    data-coords="0,20 60,20 60,0 100,50 60,100 60,80 0,80">
                    <div style="  clip-path: polygon(0% 20%, 60% 20%, 60% 0%, 100% 50%, 60% 100%, 60% 80%, 0% 80%)"
                        class="shape Right arrow"></div>
                    <figcaption>Right arrow</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Left Point" data-type="polygon"
                    data-coords="25,0 100,0 100,100 25,100 0,50">
                    <div style="  clip-path: polygon(25% 0%, 100% 0%, 100% 100%, 25% 100%, 0% 50%)"
                        class="shape Left Point"></div>
                    <figcaption>Left Point</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Right Point" data-type="polygon"
                    data-coords="0,0 75,0 100,50 75,100 0,100">
                    <div style="  clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%)"
                        class="shape Right Point"></div>
                    <figcaption>Right Point</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Left Chevron" data-type="polygon"
                    data-coords="100,0 75,50 100,100 25,100 0,50 25,0">
                    <div style="  clip-path: polygon(100% 0%, 75% 50%, 100% 100%, 25% 100%, 0% 50%, 25% 0%)"
                        class="shape Left Chevron"></div>
                    <figcaption>Left Chevron</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Right Chevron" data-type="polygon"
                    data-coords="75,0 100,50 75,100 0,100 25,50 0,0">
                    <div style="  clip-path: polygon(75% 0%, 100% 50%, 75% 100%, 0% 100%, 25% 50%, 0% 0%)"
                        class="shape Right Chevron"></div>
                    <figcaption>Right Chevron</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Star" data-type="polygon"
                    data-coords="50,0 61,35 98,35 68,57 79,91 50,70 21,91 32,57 2,35 39,35">
                    <div style="  clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%)"
                        class="shape Star"></div>
                    <figcaption>Star</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Cross" data-type="polygon"
                    data-coords="10,25 35,25 35,0 65,0 65,25 90,25 90,50 65,50 65,100 35,100 35,50 10,50">
                    <div style="  clip-path: polygon(10% 25%, 35% 25%, 35% 0%, 65% 0%, 65% 25%, 90% 25%, 90% 50%, 65% 50%, 65% 100%, 35% 100%, 35% 50%, 10% 50%)"
                        class="shape Cross"></div>
                    <figcaption>Cross</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Message" data-type="polygon"
                    data-coords="0,0 100,0 100,75 75,75 75,100 50,75 0,75">
                    <div style="  clip-path: polygon(0% 0%, 100% 0%, 100% 75%, 75% 75%, 75% 100%, 50% 75%, 0% 75%)"
                        class="shape Message"></div>
                    <figcaption>Message</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Close" data-type="polygon"
                    data-coords="20,0 0,20 30,50 0,80 20,100 50,70 80,100 100,80 70,50 100,20 80,0 50,30">
                    <div style="  clip-path: polygon(20% 0%, 0% 20%, 30% 50%, 0% 80%, 20% 100%, 50% 70%, 80% 100%, 100% 80%, 70% 50%, 100% 20%, 80% 0%, 50% 30%)"
                        class="shape Close"></div>
                    <figcaption>Close</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Frame" data-type="polygon"
                    data-coords="0,0 0,100 25,100 25,25 75,25 75,75 25,75 25,100 100,100 100,0">
                    <div style="  clip-path: polygon(0% 0%, 0% 100%, 25% 100%, 25% 25%, 75% 25%, 75% 75%, 25% 75%, 25% 100%, 100% 100%, 100% 0%)"
                        class="shape Frame"></div>
                    <figcaption>Frame</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Inset" data-type="inset" data-coords="5 20 15 10">
                    <div style="  clip-path: inset(5% 20% 15% 10%)" class="shape Inset"></div>
                    <figcaption>Inset</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Custom Polygon" data-type="custom"
                    data-coords="10,75 10,25 35,0 100,10 90,30 50,30 40,40 40,60 50,70 90,70 100,90 35,100">
                    <div style="  clip-path: polygon(10% 75%, 10% 25%, 35% 0%, 100% 10%, 90% 30%, 50% 30%, 40% 40%, 40% 60%, 50% 70%, 90% 70%, 100% 90%, 35% 100%)"
                        class="shape Custom Polygon"></div>
                    <figcaption>Custom Polygon</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Circle" data-type="circle">
                    <div style="  clip-path: circle(50% at 50% 50%)" class="shape Circle"></div>
                    <figcaption>Circle</figcaption>
                </figure>
            </ul>
        </section>
        <section class="clip-path" tabindex="-1">
            <div class="css-code code fade-content">
            
                <code class="unprefixed block show">clip-path: <span class="functions">polygon(<code class="point"
                            data-point="0">50% 0%</code>, <code class="point" data-point="1">0% 100%</code>, <code
                            class="point" data-point="2">100% 100%</code>)</span>;</code>
            </div>
        </section>
    </div>
    <div class="side">
        <section class="dark-panel inset">
            <div class="flex">
                <h2>Round edges</h2>
                <input value="5% 20% 0 10%" class="inset-round" type="text">
            </div>
            <p>
                The <code>inset()</code> shape optionally allows values
                similar to <code>border-radius</code> for rounded edges.
                This new feature may be buggy in
                <span class="your-browser">your browser</span>.
            </p>
        </section>
        <section class="dark-panel custom">
            <h2>Custom shape</h2>
            <button class="finish"></button>
        </section>
        <section class="shapes vertical" tabindex="-1">
            <ul>
                <figure class="gallery-cell on" data-name="Triangle" data-type="polygon"
                    data-coords="50,0 0,100 100,100">
                    <div style="  clip-path: polygon(50% 0%, 0% 100%, 100% 100%)" class="shape Triangle"></div>
                    <figcaption>Triangle</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Trapezoid" data-type="polygon"
                    data-coords="20,0 80,0 100,100 0,100">
                    <div style="  clip-path: polygon(20% 0%, 80% 0%, 100% 100%, 0% 100%)" class="shape Trapezoid"></div>
                    <figcaption>Trapezoid</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Parallelogram" data-type="polygon"
                    data-coords="25,0 100,0 75,100 0,100">
                    <div style="  clip-path: polygon(25% 0%, 100% 0%, 75% 100%, 0% 100%)" class="shape Parallelogram">
                    </div>
                    <figcaption>Parallelogram</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Rhombus" data-type="polygon"
                    data-coords="50,0 100,50 50,100 0,50">
                    <div style="  clip-path: polygon(50% 0%, 100% 50%, 50% 100%, 0% 50%)" class="shape Rhombus"></div>
                    <figcaption>Rhombus</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Pentagon" data-type="polygon"
                    data-coords="50,0 100,38 82,100 18,100 0,38">
                    <div style="  clip-path: polygon(50% 0%, 100% 38%, 82% 100%, 18% 100%, 0% 38%)"
                        class="shape Pentagon"></div>
                    <figcaption>Pentagon</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Hexagon" data-type="polygon"
                    data-coords="25,0 75,0 100,50 75,100 25,100 0,50">
                    <div style="  clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%)"
                        class="shape Hexagon"></div>
                    <figcaption>Hexagon</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Heptagon" data-type="polygon"
                    data-coords="50,0 90,20 100,60 75,100 25,100 0,60 10,20">
                    <div style="  clip-path: polygon(50% 0%, 90% 20%, 100% 60%, 75% 100%, 25% 100%, 0% 60%, 10% 20%)"
                        class="shape Heptagon"></div>
                    <figcaption>Heptagon</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Octagon" data-type="polygon"
                    data-coords="30,0 70,0 100,30 100,70 70,100 30,100 0,70 0,30">
                    <div style="  clip-path: polygon(30% 0%, 70% 0%, 100% 30%, 100% 70%, 70% 100%, 30% 100%, 0% 70%, 0% 30%)"
                        class="shape Octagon"></div>
                    <figcaption>Octagon</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Nonagon" data-type="polygon"
                    data-coords="50,0 83,12 100,43 94,78 68,100 32,100 6,78 0,43 17,12">
                    <div style="  clip-path: polygon(50% 0%, 83% 12%, 100% 43%, 94% 78%, 68% 100%, 32% 100%, 6% 78%, 0% 43%, 17% 12%)"
                        class="shape Nonagon"></div>
                    <figcaption>Nonagon</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Decagon" data-type="polygon"
                    data-coords="50,0 80,10 100,35 100,70 80,90 50,100 20,90 0,70 0,35 20,10">
                    <div style="  clip-path: polygon(50% 0%, 80% 10%, 100% 35%, 100% 70%, 80% 90%, 50% 100%, 20% 90%, 0% 70%, 0% 35%, 20% 10%)"
                        class="shape Decagon"></div>
                    <figcaption>Decagon</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Bevel" data-type="polygon"
                    data-coords="20,0 80,0 100,20 100,80 80,100 20,100 0,80 0,20">
                    <div style="  clip-path: polygon(20% 0%, 80% 0%, 100% 20%, 100% 80%, 80% 100%, 20% 100%, 0% 80%, 0% 20%)"
                        class="shape Bevel"></div>
                    <figcaption>Bevel</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Rabbet" data-type="polygon"
                    data-coords="0,15 15,15 15,0 85,0 85,15 100,15 100,85 85,85 85,100 15,100 15,85 0,85">
                    <div style="  clip-path: polygon(0% 15%, 15% 15%, 15% 0%, 85% 0%, 85% 15%, 100% 15%, 100% 85%, 85% 85%, 85% 100%, 15% 100%, 15% 85%, 0% 85%)"
                        class="shape Rabbet"></div>
                    <figcaption>Rabbet</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Left arrow" data-type="polygon"
                    data-coords="40,0 40,20 100,20 100,80 40,80 40,100 0,50">
                    <div style="  clip-path: polygon(40% 0%, 40% 20%, 100% 20%, 100% 80%, 40% 80%, 40% 100%, 0% 50%)"
                        class="shape Left arrow"></div>
                    <figcaption>Left arrow</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Right arrow" data-type="polygon"
                    data-coords="0,20 60,20 60,0 100,50 60,100 60,80 0,80">
                    <div style="  clip-path: polygon(0% 20%, 60% 20%, 60% 0%, 100% 50%, 60% 100%, 60% 80%, 0% 80%)"
                        class="shape Right arrow"></div>
                    <figcaption>Right arrow</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Left Point" data-type="polygon"
                    data-coords="25,0 100,0 100,100 25,100 0,50">
                    <div style="  clip-path: polygon(25% 0%, 100% 0%, 100% 100%, 25% 100%, 0% 50%)"
                        class="shape Left Point"></div>
                    <figcaption>Left Point</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Right Point" data-type="polygon"
                    data-coords="0,0 75,0 100,50 75,100 0,100">
                    <div style="  clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%)"
                        class="shape Right Point"></div>
                    <figcaption>Right Point</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Left Chevron" data-type="polygon"
                    data-coords="100,0 75,50 100,100 25,100 0,50 25,0">
                    <div style="  clip-path: polygon(100% 0%, 75% 50%, 100% 100%, 25% 100%, 0% 50%, 25% 0%)"
                        class="shape Left Chevron"></div>
                    <figcaption>Left Chevron</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Right Chevron" data-type="polygon"
                    data-coords="75,0 100,50 75,100 0,100 25,50 0,0">
                    <div style="  clip-path: polygon(75% 0%, 100% 50%, 75% 100%, 0% 100%, 25% 50%, 0% 0%)"
                        class="shape Right Chevron"></div>
                    <figcaption>Right Chevron</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Star" data-type="polygon"
                    data-coords="50,0 61,35 98,35 68,57 79,91 50,70 21,91 32,57 2,35 39,35">
                    <div style="  clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%, 79% 91%, 50% 70%, 21% 91%, 32% 57%, 2% 35%, 39% 35%)"
                        class="shape Star"></div>
                    <figcaption>Star</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Cross" data-type="polygon"
                    data-coords="10,25 35,25 35,0 65,0 65,25 90,25 90,50 65,50 65,100 35,100 35,50 10,50">
                    <div style="  clip-path: polygon(10% 25%, 35% 25%, 35% 0%, 65% 0%, 65% 25%, 90% 25%, 90% 50%, 65% 50%, 65% 100%, 35% 100%, 35% 50%, 10% 50%)"
                        class="shape Cross"></div>
                    <figcaption>Cross</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Message" data-type="polygon"
                    data-coords="0,0 100,0 100,75 75,75 75,100 50,75 0,75">
                    <div style="  clip-path: polygon(0% 0%, 100% 0%, 100% 75%, 75% 75%, 75% 100%, 50% 75%, 0% 75%)"
                        class="shape Message"></div>
                    <figcaption>Message</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Close" data-type="polygon"
                    data-coords="20,0 0,20 30,50 0,80 20,100 50,70 80,100 100,80 70,50 100,20 80,0 50,30">
                    <div style="  clip-path: polygon(20% 0%, 0% 20%, 30% 50%, 0% 80%, 20% 100%, 50% 70%, 80% 100%, 100% 80%, 70% 50%, 100% 20%, 80% 0%, 50% 30%)"
                        class="shape Close"></div>
                    <figcaption>Close</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Frame" data-type="polygon"
                    data-coords="0,0 0,100 25,100 25,25 75,25 75,75 25,75 25,100 100,100 100,0">
                    <div style="  clip-path: polygon(0% 0%, 0% 100%, 25% 100%, 25% 25%, 75% 25%, 75% 75%, 25% 75%, 25% 100%, 100% 100%, 100% 0%)"
                        class="shape Frame"></div>
                    <figcaption>Frame</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Inset" data-type="inset" data-coords="5 20 15 10">
                    <div style="  clip-path: inset(5% 20% 15% 10%)" class="shape Inset"></div>
                    <figcaption>Inset</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Custom Polygon" data-type="custom"
                    data-coords="10,75 10,25 35,0 100,10 90,30 50,30 40,40 40,60 50,70 90,70 100,90 35,100">
                    <div style="  clip-path: polygon(10% 75%, 10% 25%, 35% 0%, 100% 10%, 90% 30%, 50% 30%, 40% 40%, 40% 60%, 50% 70%, 90% 70%, 100% 90%, 35% 100%)"
                        class="shape Custom Polygon"></div>
                    <figcaption>Custom Polygon</figcaption>
                </figure>
                <figure class="gallery-cell" data-name="Circle" data-type="circle">
                    <div style="  clip-path: circle(50% at 50% 50%)" class="shape Circle"></div>
                    <figcaption>Circle</figcaption>
                </figure>
            </ul>
        </section>
        <section class="options">
     
            <div class="grid panel flex fade-content">
                <h2>Demo Size</h2>
                <input id="demo_width" value="500" type="number">
                <h2>×</h2>
                <input id="demo_height" value="500" type="number">
            </div>
            <style>
                .shadowboard,
                .clipboard {
                    background-image: url(<?php echo VFCPM_PLUGIN_URL; ?>assets/images/img-1.jpg);
                }
            </style>
            <div class="grid panel fade-content">
                <h2>Demo Background</h2>
                <div class="backgrounds">
                    <img src="<?php echo VFCPM_PLUGIN_URL; ?>assets/images/img-1.jpg">
                    <img src="<?php echo VFCPM_PLUGIN_URL?>assets/images/img-2.jpg">
                    <img src="<?php echo VFCPM_PLUGIN_URL?>assets/images/img-3.jpg">
                    <img src="<?php echo VFCPM_PLUGIN_URL?>assets/images/img-4.jpg">
                </div>
                <input placeholder="Custom URL..." id="custom_url" type="url" name="background">
                <style id="custom_background"></style>
                <div class="flex shadowboard-toggle">
                    <h2>Show outside clip-path</h2>
                    <input name="prefix" type="checkbox" id="shadowboard-toggle">
                    <label class="joined" for="shadowboard-toggle"></label>
                </div>
            </div>
            <div class="grid panel fade-content">
                <h2>Definition and Usage</h2>
                <p>The clip-path property lets you clip an element to a basic shape or to an SVG source.</p>
            </div>
            <div class="grid panel fade-content">
                <h2>How to Use</h2>
                <p>You can use it by using img tag.</p>
                <br>
    <pre>
    img {
        clip-path: circle(50%);
    }
    </pre>

            </div>

        </section>
    </div>