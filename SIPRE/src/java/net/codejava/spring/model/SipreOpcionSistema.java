/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package net.codejava.spring.model;

import java.io.Serializable;
import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.NamedQueries;
import javax.persistence.NamedQuery;
import javax.persistence.Table;
import javax.xml.bind.annotation.XmlRootElement;

/**
 *
 * @author DIEGO
 */
@Entity
@Table(name = "SIPRE_OPCION_SISTEMA")
@XmlRootElement
@NamedQueries({
    @NamedQuery(name = "SipreOpcionSistema.findAll", query = "SELECT s FROM SipreOpcionSistema s")})
public class SipreOpcionSistema implements Serializable {
    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    private Long id;
    @Basic(optional = false)
    private String nombre;
    private String pagina;
    private String icon;
    @Column(name = "ID_PADRE")
    private Long idPadre;
    @Basic(optional = false)
    private short nivel;
    @Basic(optional = false)
    private short estado;
    @Basic(optional = false)
    private String orden;
    @Basic(optional = false)
    @Column(name = "TIPO_MENU")
    private short tipoMenu;
    @Basic(optional = false)
    @Column(name = "IS_MENU")
    private short isMenu;
    @Basic(optional = false)
    @Column(name = "TIPO_URL")
    private short tipoUrl;

    public SipreOpcionSistema() {
    }

    public SipreOpcionSistema(Long id) {
        this.id = id;
    }

    public SipreOpcionSistema(Long id, String nombre, short nivel, short estado, String orden, short tipoMenu, short isMenu, short tipoUrl) {
        this.id = id;
        this.nombre = nombre;
        this.nivel = nivel;
        this.estado = estado;
        this.orden = orden;
        this.tipoMenu = tipoMenu;
        this.isMenu = isMenu;
        this.tipoUrl = tipoUrl;
    }

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public String getNombre() {
        return nombre;
    }

    public void setNombre(String nombre) {
        this.nombre = nombre;
    }

    public String getPagina() {
        return pagina;
    }

    public void setPagina(String pagina) {
        this.pagina = pagina;
    }

    public String getIcon() {
        return icon;
    }

    public void setIcon(String icon) {
        this.icon = icon;
    }

    public Long getIdPadre() {
        return idPadre;
    }

    public void setIdPadre(Long idPadre) {
        this.idPadre = idPadre;
    }

    public short getNivel() {
        return nivel;
    }

    public void setNivel(short nivel) {
        this.nivel = nivel;
    }

    public short getEstado() {
        return estado;
    }

    public void setEstado(short estado) {
        this.estado = estado;
    }

    public String getOrden() {
        return orden;
    }

    public void setOrden(String orden) {
        this.orden = orden;
    }

    public short getTipoMenu() {
        return tipoMenu;
    }

    public void setTipoMenu(short tipoMenu) {
        this.tipoMenu = tipoMenu;
    }

    public short getIsMenu() {
        return isMenu;
    }

    public void setIsMenu(short isMenu) {
        this.isMenu = isMenu;
    }

    public short getTipoUrl() {
        return tipoUrl;
    }

    public void setTipoUrl(short tipoUrl) {
        this.tipoUrl = tipoUrl;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (id != null ? id.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof SipreOpcionSistema)) {
            return false;
        }
        SipreOpcionSistema other = (SipreOpcionSistema) object;
        if ((this.id == null && other.id != null) || (this.id != null && !this.id.equals(other.id))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "net.codejava.spring.model.SipreOpcionSistema[ id=" + id + " ]";
    }
    
}
