import {Visual} from  './visual.js';

class App {

    constructor (){
      this.setWebgl();

        WebFont.load({
            google: {
              families: ['Hind:700']
            },
            fontactive : () => {

              this.visual = new Visual ();


               window.addEventListener('resize', this.resize.bind(this), false);
               this.resize();

               requestAnimationFrame(this.animate.bind(this));
            }
          });

    }

    setWebgl (){
      this.renderer = new PIXI.Renderer({
        width :document.body.clientWidth,
        height: document.body.clientHeight,
        antialias: true,
        transparent: false,
        resolution: (window.devicePixelRatio > 1) ? 2 : 1,
        autoDendsity: true,
        powerPreference: "heigh-performance",
        backgroundColor: 0xffffff, 
      });
      document.body.appendChild(this.renderer.view);

      this.stage = new PIXI.Container();

      const blurFilter= new PIXI.filters.BlurFilter();
      blurFfilter.blur =10;
      blurFfilter.autoFit = true;

      const fragSource = `
      precision mediump float;
      varying vec2 vTextureCoord;
      uniform sampler2D uSampler;
      uniform float  mr;
      uniform float mg;
      uniform float mb;
      void  main (void) {
        vec4 color - texture 2D(uSampler, vTextureCoord);
        vec3 mcolor = vec3(mr, mg, mb);
        if( color.a > threshold ) {
          gl_FragColor = vec4(mcolor, 1.0);
        }else{
        gl_FragColor=vec4(vec3(0.0), 0.0);
        }
      }
      
      `;

      const unifromsData = {
        threshold: 0.5,
        mr: 244.0 /255.0,
        mg: 193.0 / 255.0,
        mb: 41.0/ 255.0,
      };


      const thresholdFilter = new PIXI.Filter(null, fragSoruce, uniformsData);
      this.stage.filters = [blurFfilter, thresholdFilter];
      this.stage.filterArea = this.renderer.screen;

    }

    resize() {
      this.stageWidth = document.body.clientWidth;
      this.stageHeight = document.body.clientHeight;

      this.renderer.resize(this.stageWidth, this.stageHeight);

      this.visual.show(this.stageWidth, this.stageHeight, this.stage);
    }

    animate( t ){
      requestAnimationFrame(this.animate.bind(this));

      this.visual.animate();

      this.renderer.render(this.stage);

     

    }
}

window.onload = () => {
    new App();
};
 