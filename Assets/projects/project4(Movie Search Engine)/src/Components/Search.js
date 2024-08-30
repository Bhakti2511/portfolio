import React from "react";
import { useGlobalContext } from "./Context";

const Search = () => {
  const { query, setQuery, Error } = useGlobalContext();
  return (
    <>
      <div className="search">
        <form className="form" action="#" onSubmit={(e) => e.preventDefault()}>
          {/* <sicon /> */}
          <input
            type="text"
            className="search-bar"
            placeholder="Search Here"
            value={query}
            onChange={(e) => setQuery(e.target.value)}
          />
        </form>
      </div>
      <div>
        <h3>{Error.show && Error.msg}</h3> 
      </div>
    </>
  );
};

export default Search;
