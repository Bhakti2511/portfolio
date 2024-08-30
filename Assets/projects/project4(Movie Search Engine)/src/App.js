import './App.css';
import Home from './Components/Home'
import Singlemovie from './Components/Singlemovie'
import Error from './Components/Error'
import { Routes , Route} from "react-router-dom"
import { AppProvider } from './Components/Context';

function App() {
  return (
    <>
          <Routes>
            <Route path="/" element={<Home />} />
            <Route path="Movies/:id" element={<Singlemovie />} />
            <Route path="*" element={<Error />} />
          </Routes>
    </>
  );
}

export default App;
