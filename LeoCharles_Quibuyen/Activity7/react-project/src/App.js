
import './App.css';
import 'bootstrap/dist/css/bootstrap.css';
import Body from './component/Body';
import HeaderCard from './component/HeaderCard';
import TitleCard from './component/TitleCard';
import TextCard from './component/TextCard';


function App() {
  return (
    <div className="container text-center">
      <div className="row p-3">
              <div class="col-6">
                <div className ="card01">
                  <HeaderCard title="Regular"/>
                </div>
              </div>
              <div className="col-2">
              <div className="card1">
                  <Body title="Counter 1"/>
                </div>
              </div>
              <div className="col-2">
                  <div className="card1">
                    <Body title="Counter 2"/>
                  </div>
              </div>
              <div className="col-2">
                <div className="card1">
                  <Body title="Counter 3"/>
                </div>
              </div>
      </div>
      <div className="row p-3">
              <div className="col-6">
                <div className="card02">
                  <HeaderCard title="Regular"/>
                </div>
                <div className="cardNumber bg-info h-100">
                  <TitleCard number="001"/>
                  <br></br>
                  <TextCard msg="Please wait on your queue to be called and proceed to your designated counter"/>
                </div>
                
              </div>

              <div className="col-2 bg-warning" >
              <div className="card03">
                <HeaderCard text="Now Serving"/>
              </div>
              <div className="cardNumber">
                  <TitleCard number="001"/>
              </div>
              <div className="card04">
                  <TextCard msg2="Please proceed to the counter"/>
              </div>
              </div>

              <div className="col-2 bg-warning">
              <div class="card03">
                <HeaderCard text="Now Serving"/>
              </div>
              <div className="cardNumber">
                  <TitleCard number="002"/>
              </div>
              <div className="card04">
                  <TextCard msg2="Please proceed to the counter"/>
              </div>
              </div>

              <div className="col-2 bg-warning">
              <div class="card03">
              <HeaderCard text="Now Serving"/>
              </div>
              <div className="cardNumber">
                  <TitleCard number="003"/>
              </div>
              <div className="card04">
                  <TextCard msg2="Please proceed to the counter"/>
              </div>
              </div>
      </div>
      <div className="row p-3">
              <div className="col-6">
                    
              </div>

              <div className="col-2">
                  <div className="card">
                    <Body text="NEXT"/>
                  </div>
              </div>

              <div className="col-2">
                  <div className="card">
                  <Body text="TRANSFER"/>
                  </div>
              </div>

              <div className="col-2">
                  <div className="card">
                    <Body text="SERVE"/>
                  </div>
              </div>
      </div>

      <div className="row p-3">
              <div className="col-6">
                    
              </div>

              <div className="col-2">
                  <div className="card bg-danger">
                    <Body total="Total Serve: 10"/>
                  </div>
              </div>

              <div className="col-2">
                  <div className="card bg-danger">
                  <Body total="Total Pending: 5"/>
                  </div>
              </div>

              <div className="col-2">
                  <div className="card bg-danger">
                    <Body total="Over all total: 15"/>
                  </div>
              </div>
      </div>
      



    </div>






  );
}

export default App;


