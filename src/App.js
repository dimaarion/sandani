import React, { useState, useEffect } from 'react';
import './css/App.css';
import {
  Switch,
  Route,
  NavLink
} from "react-router-dom";
import Menu from './components/Menu';
import Err from './pages/Err';
import Home from './pages/Home';
import Article from './pages/Article';
import Load from './components/Load';
import Logo from './components/Logo';
import { getMenu, getLogo, array_obj, menuPod, getPodMenu, connectPanel } from './actions'
function App() {
  const [menu, setmenu] = useState({ data: [{}], status: 0 });
  const [logotype, setlogotype] = useState({ data: [{}], status: 0 });
  const [podmenu, setpodmenu] = useState({ data: [{}], status: 0 });
  const [connectpanel, setconnectpanel] = useState({ data: [{}], status: 0 });
  const [state, setstate] = useState({ lin: false, podMenu: [] });
  useEffect(() => {
    getMenu(setmenu);
    getLogo(setlogotype);
    getPodMenu(setpodmenu);
    connectPanel(setconnectpanel);
  }, []);

let bac;
let t = true;
if(t === false){
bac = {backgroundImage: 'url(/img/16_col.gif)'};
}else{
  bac = {};
}

  return (
    <div className="App container-fluid" style={bac}>
      <div className="row justify-content-md-center">
        <div className="col col-lg-1"></div>
        <div className="col-sm-2">
          <Logo logotype={logotype.data} />
        </div>
        <div className="col-sm">
          <Menu menu={menu.data} setstate={setstate} />
        </div>
        <div className="col col-lg-1"></div>
      </div>
      <div style={{
        height: '1px',
        width: '100%',
        backgroundColor: '#cccccc',
        marginTop: '-4px'
      }}>
      </div>
      {(state.lin === true && state.podMenu.length !== 0) ?
        <div onMouseOver={() => setstate({ lin: true, podMenu: state.podMenu })} className="container mt-4 podmenu">

          <div className="row text-left">
            {
              array_obj(state.podMenu).map((x, i) =>
                <div className="col-sm-3 p-4" key={i + 55}>
                  <div className="col-sm item_head">
                    <NavLink activeStyle={{ textDecorationLine: 'revert' }} onMouseOver={() => setstate({ lin: true })} to={`${x.alias}`}>
                      {x.names}
                    </NavLink>
                  </div>
                  {(array_obj(x.cild).length !== 0) ? menuPod(x, setstate) : ''}
                </div>
              )

            }
          </div>
          <div onMouseOut={() => setstate({ lin: false, podMenu: [] })} className="container " style={{ height: '20px', zIndex: 1000 }}></div>
        </div>

        : ''
      }
      <div className="container">
        <div className="row p-4">
         
           
             {(connectpanel.status === 200)?connectpanel.data.map((x)=> 
             <div className="col-sm " key = {x.id + 23}>
             <div className = "row">
               <div className = "col-sm-3">
                 <img width = "70px" src={`/img/icon/${x.img}`} alt={x.names} />
               </div>
               <div className = "col-sm-8" style = {{fontSize:'18pt'}}>
                 {x.names}
               </div>
             </div>
                
            </div>
             ):''}
            
         
        </div>

      </div>
      <div className = "row justify-content-md-center">
      <div className="col col-lg-1"></div>
      <div className = "col-sm">
      
         {
        (menu.status === 200 && podmenu.status === 200) ?

          <Switch>
            <Route exact path="/" component={Home} />

            {
              podmenu.data.map((x, i) =>
                <Route key={i + 22} path={`/${x}`} component={Article} />
              )
            }
            <Route
              component={Err} />
          </Switch>
          : <Load />
      }
      </div>
      <div className="col col-lg-1"></div>
      </div>
     
    </div>
  );
}

export default App;
