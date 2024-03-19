// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

// Recommended way, to include only the icons you need.
import { createIcons, Activity, LogOut } from 'lucide';

createIcons({
  icons: {
    Activity,
    LogOut,
  },
});

console.log('Happy coding!!');
