import NotFound from './components/NotFound';
import Logo from './components/Logo';
import LogoSymbol from './components/LogoSymbol';
import Colors from './components/Colors';
import Tipography from './components/Tipography';
import Mascot from './components/Mascot';
import Illustrations from './components/Illustrations';
import SiteStats from './components/SiteStats';
import Wallpapers from './components/Wallpapers'; 
import YourAchievements from './components/YourAchievements'; 

let LoadersAndAnimations = () => import('./components/LoadersAndAnimations');



export default {
	mode: 'history',

	linkActiveClass: 'font-bold', 

	routes:[
		{
			path:'*',
			component: NotFound
		},
		{
			path:'/',
			component: Logo
		},
		{
			path: '/logo-symbol',
			component: LogoSymbol 
		},
		{
			path: '/colors',
			component: Colors 
		},
		{
			path: '/tipography',
			component: Tipography 
		},
		{
			path: '/mascot',
			component: Mascot 
		},
		{
			path: '/illustrations',
			component: Illustrations 
		},
		{
			path: '/loaders-and-animations',
			component: LoadersAndAnimations 
		},
		{
			path: '/wallpapers',
			component: Wallpapers 
		},
		{
			path: '/site-stats',
			component: SiteStats 
		},
		{
			path: '/your-achievements',
			component: YourAchievements 
		}
	]
}



