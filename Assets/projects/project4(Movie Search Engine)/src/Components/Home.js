import Search from'./Search';
import Movies from './Movies';

const Home = () => {
  // const name = useContext(AppContext);
  // const name = useGlobalContext();
  return (
    <>
      <div>
        {/* <h1> My Home</h1> */}
        <Search />
        <Movies />
        
        {/* <h1> {name} </h1> */}
      </div>
    </>
  );
}

export default Home