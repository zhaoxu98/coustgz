import { createRoot } from 'react-dom/client';
import { Provider } from 'react-redux';

import './index.css';
import App from './components/App';
import * as serviceWorker from './serviceWorker';

// Redux
import store from './store';

const root = createRoot(document.getElementById('root'));
root.render(
    <Provider store={store}>
        <App />
    </Provider>
);

// If you want your app to work offline and load faster, you can change
// unregister() to register() below. Note this comes with some pitfalls.
// Learn more about service workers: https://bit.ly/CRA-PWA
serviceWorker.unregister();
